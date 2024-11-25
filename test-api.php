<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$access_key = 'fc14cab44c29e4b6a99ff73d35851d61';
$url = 'http://api.mediastack.com/v1/news?access_key=' . $access_key . '&categories=health&languages=en&limit=1';

echo "Testing API connection...<br>";
echo "URL: " . $url . "<br><br>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    $result = json_decode($response, true);
    echo "Raw Response:<br>";
    echo "<pre>";
    print_r($response);
    echo "</pre><br>";
    
    echo "Decoded Response:<br>";
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}

curl_close($ch);
?>
