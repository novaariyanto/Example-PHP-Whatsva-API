<?php

$curl = curl_init();
$data = [
    "message" => "test",
    "number" => "62895361034833",
    "apikey"=> "4YwLki3nduP8",
    "file_url"=>"https://udghatan.com/wp-content/uploads/2020/06/20200609_120527_0000-300x300.jpg"
];
$payload = json_encode($data);

$ch = curl_init("https://whatsva.com/api/sendMessagesFileUrl");
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
