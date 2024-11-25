<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// API Configuration
define('MEDIASTACK_API_KEY', 'fc14cab44c29e4b6a99ff73d35851d61');
define('MEDIASTACK_API_URL', 'http://api.mediastack.com/v1/news');

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    
    $params = array(
        'access_key' => MEDIASTACK_API_KEY,
        'keywords' => $search,
        'categories' => 'health',
        'languages' => 'en',
        'limit' => 6,
        'sort' => 'published_desc'
    );
    
    $url = MEDIASTACK_API_URL . '?' . http_build_query($params);
    
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    ));
    
    $response = curl_exec($ch);
    
    if(curl_errno($ch)){
        echo json_encode(array('error' => 'Curl Error: ' . curl_error($ch)));
        exit;
    }
    
    curl_close($ch);
    
    $data = json_decode($response, true);
    
    if (isset($data['data'])) {
        header('Content-Type: application/json');
        echo json_encode($data['data']);
    } else {
        echo json_encode(array('error' => 'No results found'));
    }
} else {
    echo json_encode(array('error' => 'No search term provided'));
}
?>
