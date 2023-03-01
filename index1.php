<?php

$url = 'https://dog.ceo/api/breeds/list/all';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

$data = json_decode($response, true);
print $data[0];
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);

curl_close($ch);
if ($curl_errno > 0) {
  echo "cURL Error ($curl_errno): $curl_error\n";
} else {
  echo '<ul>';
  foreach ($data["message"] as $key => $breed) {
    echo '<li>' . $key . '</li>';
  }

  echo '</ul>';
}

$url2 = 'http://www.boredapi.com/api/activity/';

$ch2 = curl_init($url2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$response2 = curl_exec($ch2);
$activity = json_decode($response2, true);

$curl_errno2 = curl_errno($ch2);
$curl_error2 = curl_error($ch2);

curl_close($ch2);
if ($curl_errno2 > 0) {
  echo "cURL Error ($curl_errno2): $curl_error2\n";
} else {
  echo '<h2>ACTIVITY: ' . $activity["activity"] . '</h2>';
}