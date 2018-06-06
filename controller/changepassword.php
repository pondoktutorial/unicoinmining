<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}
if(isset($_POST['submitWallet'])){
  $datawallet=array('data'=>[array('id'=>(int)2,'cryptoCurrency'=>'BTC','wallet'=>$_POST['wallet'])]);
  $data_wallet=json_encode($datawallet);;
  $walletch = curl_init('https://unicoin-api.appspot.com/api/wallet');
  curl_setopt($walletch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($walletch, CURLOPT_POSTFIELDS, $data_wallet);
  curl_setopt($walletch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($walletch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_wallet),
      'Authorization: Bearer '.$_SESSION['token']
    )
  );
  $walletresult = curl_exec($walletch);
  curl_close($walletch);
  $walletdone=json_decode( $walletresult, true);
}

?>
