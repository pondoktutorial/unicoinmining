<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}


$sessions= $_SESSION['token'];
$opts = [
  "http" => [
      "method" => "GET",
      "header" => "Content-Type: application/json\r\n" .
          "Authorization: Bearer {$sessions}\r\n"
  ]
];

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$ordersfile = file_get_contents('https://unicoin-api.appspot.com/api/product', false, $context);
$orders=json_decode( $ordersfile, true);
$ordershistoryfile = file_get_contents('https://unicoin-api.appspot.com/api/orders', false, $context);
$ordershistory=json_decode( $ordershistoryfile, true);

?>
