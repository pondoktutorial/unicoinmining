<?php
session_start();
if(isset($_SESSION['token'])){
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
$file = file_get_contents('https://unicoin-api.appspot.com/api/member', false, $context);
$userraw=json_decode( $file, true);
$users=$userraw['message']['data'];
foreach($users as $user){
  echo $user['email']."<br>";
}

}else{

}

?>
