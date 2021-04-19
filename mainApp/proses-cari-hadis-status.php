<table id="tblStatusHadis">
<thead>
<tr>
<th>Hadis</th>
</tr>
</thead>
<tbody>

<?php
session_start();
header("Access-Control-Allow-Origin: *");
include("../config/db.php");

class data{}
$dr = new data();

$status = $_POST['status'];

$dh = "";

$qHadis = $link -> query("SELECT * FROM tbl_kitab WHERE status='$status';");

while($rHadis = $qHadis -> fetch_assoc()){
    $kdKitab = $rHadis['kd_kitab'];
    $namaKitab = $rHadis['nama_kitab'];
    $qKitab = $link -> query("SELECT * FROM tbl_hadis WHERE kd_kitab='$kdKitab';");
    while($rKitab = $qKitab -> fetch_assoc()){
        $nass = $rKitab['nass'];
        $terjemahan = $rKitab['terjemahan'];
        $dh .= "<tr><td>Kitab : ".$namaKitab."<br/>Nass : <br/>".$nass."<br/>Terjemahan : <br/>".$terjemahan."<hr/></td></tr>";
    }
}

echo $dh;
?>
</tbody>
</table>

<script>
$('#tblStatusHadis').dataTable();
</script>