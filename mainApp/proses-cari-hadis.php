<table>
<?php
session_start();
header("Access-Control-Allow-Origin: *");
include("../config/db.php");

class data{}
$dr = new data();

$kata = $_POST['kata'];

$queryAmbil = $link -> query("SELECT * FROM tbl_hadis WHERE terjemahan LIKE '%".$kata."%'");
$no = 1;
while($rAm = $queryAmbil -> fetch_assoc()){
$terjemahan = $rAm['terjemahan'];
$nass = $rAm['nass']; 
$kdKitab = $rAm['kd_kitab'];
$qKitab = $link -> query("SELECT * FROM tbl_kitab WHERE kd_kitab='$kdKitab' LIMIT 0,1;");
$fKitab = $qKitab -> fetch_assoc();
$namaKitab = $fKitab['nama_kitab'];
$status = $fKitab['status'];
?> 
    <tr><td><b>Pencarian ke : <?=$no; ?> </b> - Kitab : <?=$namaKitab; ?> (<?=$status; ?>)<br/> Nass : <?=$nass; ?> <br/>Terjemahan : <?=$terjemahan; ?></td></tr>  
<?php $no++; } ?>

</table>