<?php

$curl = curl_init();
$data = [
    "message" => "test",
    "number" => "0895361034833",
    "apikey"=> "4YwLki3nduP8"
];
$payload = json_encode($data);

$ch = curl_init("https://whatsva.com/api/sendMessages");
# Setup request to send json via POST.

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
echo "<pre>$result</pre>";
