<?php
    $curl = curl_init();
    $alamat_gateway = "https://whatsva.com/api/sendFileUrl";
    $token = "8XeimL7B";
    $id_device = "206";
    $tujuan = "62818438289@s.whatsapp.net";
    $message = "bro ";


$file_url = "http://www.untag-smd.ac.id/files/Perpustakaan_Digital_2/Membongka%20Gurita%20Cikeas.pdf";
$url_opt = $alamat_gateway."?id_device=".$id_device."&tujuan=".$tujuan."&message=".$message."&file_url=".$file_url;
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
print_r($response);
curl_close($curl);
