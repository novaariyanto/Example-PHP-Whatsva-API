<?php 
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

$base_path =dirname( __FILE__ );
$file = 'file.pdf';
echo $base_path.'\\'.$file;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://whatsva.com/api/sendFiles?id_device=864&tujuan=62895361034833@s.whatsapp.net&message=hello%20bro",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array('file'=> new CURLFILE($base_path.'\\'.$file)),
  CURLOPT_HTTPHEADER => array(
    "apikey: UPANpOlm"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
print_r($response);


?>