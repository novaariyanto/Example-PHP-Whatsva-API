<?php

$curl = curl_init();
$token = "OIptCXU3";
$data =[
    "id_device"=> "48",
     "message"=> "Report Line Stop >= 60 Menit
     MTC IGP-2
     (07/03/2021)
     
     A/S - E # AXLE SHAFT LINE E
     1. 12-6E: 
     -Problem: D24 panjang cutting pregrinding ulir
     -Root Cause: Ulir dari 12-5E
     -Counter Measure: 12-6E
     - Setting v-block
     - Edit program speed & feeding 
     12-5E
     - Setting v-block
     - Edit program cutting pregrinding
     - Setting pressure workrest
     -Prevention: 
     -LS: 90 Menit",
     "tujuan"=> "6285156345912-1612258797@g.us"];
$payload = json_encode($data );

$ch = curl_init( "https://whatsva.com/api/sendTextGroup" );
# Setup request to send json via POST.

curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',"apikey: ".$token));
# Return response instead of printing.
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";