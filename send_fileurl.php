<?php

$curl = curl_init();
$alamat_gateway = "https://whatsva.com/api/sendFileUrl";
$token = "UPANpOlm";
$id_device = "419";
$tujuan = "62895361034833@s.whatsapp.net";
$message = "halo";
$file_url = "http://www.untag-smd.ac.id/files/Perpustakaan_Digital_2/Membongka%20Gurita%20Cikeas.pdf";
$url_opt = $alamat_gateway."?id_device=".$id_device."&tujuan=&message=".$message."&file_url=".$file_url;

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