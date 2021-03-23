<?php
session_start();
header("Access-Control-Allow-Origin: *");
include("../config/db.php");

require '../vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$idKitab = $_POST['idKitab'];

$urlGetHadis = "http://api.carihadis.com/?kitab=Shahih_Bukhari&id=".$idKitab;

$response = $client -> request('GET', $urlGetHadis);

$isi = $response -> getBody();

$data_hadis = json_decode($isi);
$data_satuan = $data_hadis -> data;
$data_f = $data_satuan -> {'1'};

$nass = $data_f -> nass;
$id = $data_f -> id;
$terjemah = $data_f -> terjemah;
$tipe_data = gettype($terjemah);
$ter = explode("[", $terjemah);
$total = count($ter);
$ter_gabung = "";

for($x = 0; $x < $total; $x++){
    $ter_gabung .= $ter[$x];
}

$clear_ter = str_replace("]", "", $ter_gabung);
$clear_ter = str_replace(":", "", $clear_ter);
$clear_ter = str_replace("'", "", $clear_ter);
$clear_ter = str_replace(";", "", $clear_ter);
$clear_ter = str_replace('"', "", $clear_ter);

$str_ter = substr($clear_ter, 0, 200);

$querySimpan = "INSERT INTO tbl_hadis (id, kd_hadis, kd_kitab, nass, terjemahan) VALUES(null, '$id', 'K_1', '$nass', '$clear_ter');";

$link -> query($querySimpan);

echo $str_ter;


?>
