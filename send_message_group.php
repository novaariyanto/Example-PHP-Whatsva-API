<?php

$curl = curl_init();
$alamat_gateway = "https://whatsva.com/api/sendMessageGroup";
$token = "GbHl7s95";
$id_device = "52";
$tujuan = "6285156345912-1612258797@g.us";
$message = "halo";
$url_opt = $alamat_gateway."?id_device=".$id_device."&tujuan=&message=".$message;

curl_setopt_array($curl, array(
  CURLOPT_URL => $url_opt,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "apikey: ".$token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;