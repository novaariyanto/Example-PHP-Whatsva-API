<?php 
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

$base_path =dirname( __FILE__ );
$file = 'logo.jpg';

$curl = curl_init();
$alamat_gateway = "http://localhost:8089/api/sendMessageGroup";
$token = "token123";
$id_device = "15";
$tujuan = "6285156345912-1612258797@g.us";
$message = "halo";
$url_opt = $alamat_gateway."?id_device=".$id_device."&tujuan=".$tujuan."&message=".$message;

curl_setopt_array($curl, array(
  CURLOPT_URL => $url_opt,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($base_path.'\\'.$file)),
  CURLOPT_HTTPHEADER => array(
    "apikey: ".$token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;