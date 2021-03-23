<?php
session_start();
header("Access-Control-Allow-Origin: *");
include("config/db.php");

class data{}
$dr = new data();

$username = $_POST['username'];
$password = $_POST['password'];

//cek user di db
$qUser = $link -> query("SELECT id FROM tbl_user WHERE username='$username' AND password='$password';");
$jlhUser = mysqli_num_rows($qUser);

if($jlhUser < 1){
  $dr -> status = 'gagal';
}else{
  $dr -> status = 'sukses';
}

echo json_encode($dr);

?>