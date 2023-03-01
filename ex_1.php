<?php

// $url = 'https://catfact.ninja/facts?max_length=200&limit=20';
$url = 'https://dog.ceo/api/breeds/image/random';

// $options = array(
//   'accept' => 'application/json',
//   'X-CSRF-TOKEN' => 'L4Xsp2rL19W75ZbKDgxmQCoGurIZ7liB4ZF9Loee',
// );

$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));
// curl_setopt($ch, CURLOPT_HEADER, 0);

$response = curl_exec($ch);
// echo $url.'?'.http_build_query($options)."\n";
echo $response;

$data = json_decode($response, true);
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);
curl_close($ch);

        if ($curl_errno > 0) {
                echo "cURL Error ($curl_errno): $curl_error\n";
        } else {
                echo "Data received: $data\n";
        }

// if($response) {
//   $data = json_decode($response, true);
//   print_r($data);
// } else {
//   echo 'no data';
// }


// $array = array("1" => "PHP code tester Sandbox Online",
//     "emoji" => "😀 😃 😄 😁 😆", 5 , 5 => 89009,
//     "Random number" => rand(100,999),
//     "PHP Version" => phpversion()
// );

// foreach( $array as $key => $value ){
//     echo $key."\t=>\t".$value."\n";
// } 