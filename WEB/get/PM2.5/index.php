<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.heclouds.com/devices/26021494/datastreams/PM2.5",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"{redled}1\"\r\n\r\n\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "api-key: Dp0zRJ=c2gFMs2au4K8GCprQNbQ=",
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
    "postman-token: d77de446-a5cb-99cf-21bd-aad519d5e23e"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}