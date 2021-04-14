<?php

$curl = curl_init();
$device_api_key = "4YwLki3nduP8";
$data = [
    "message" => "test",
    "tujuan" => "62895361034833@s.whatsapp.net",
];
$payload = json_encode($data);

$ch = curl_init("https://whatsva.com/api/sendMessage");
# Setup request to send json via POST.

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', "apikey: " . $device_api_key));
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";
