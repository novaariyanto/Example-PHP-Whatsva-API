<?php 
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

$base_path =dirname( __FILE__ );
$file = 'file.pdf';

$curl = curl_init();
$alamat_gateway = "https://whatsva.com/api/sendFiles";
$token = "UPANpOlm";
$id_device = "419";
$tujuan = "62895361034833@s.whatsapp.net";
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
  CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($base_path.'\\'.$file)),
  CURLOPT_HTTPHEADER => array(
    "apikey: ".$token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
print_r($response);


?>