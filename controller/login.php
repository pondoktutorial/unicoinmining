<?php
if(isset($_POST['submitLogin'])){
  $data=['username'=>'UnicoinMining','password'=>'c9d2f646a1c6a0bc954713826002502671d533429c60b7a616c256a08a4ba1b2'];
  $data_string = json_encode($data);

$ch = curl_init('https://unicoin-api.appspot.com/api/auth');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
curl_close($ch);
$tokenauth=json_decode( $result, true );
$tokenlogin=$tokenauth['message']['token'];
if(isset($tokenlogin)){
if(isset($_POST['submitLogin'])){
  $datalogin=['email'=>$_POST['email'],'password'=>$_POST['password'],'token'=>$tokenlogin];
  $data_login = json_encode($datalogin);
  $loginch = curl_init('https://unicoin-api.appspot.com/api/login');
  curl_setopt($loginch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($loginch, CURLOPT_POSTFIELDS, $data_login);
  curl_setopt($loginch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($loginch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_login))
  );
  $loginresult = curl_exec($loginch);
  curl_close($loginch);
  $login=json_decode( $loginresult, true);
  if($login['status']==400){
    return $errors['fromapi']="Username / Password Not Match";
  }else{
    session_start();
    $_SESSION['token']=$login['message']['token'];
    header('location:/');
    exit();
  }

}
}else{
  echo "Token Not Found";
}
}

?>
