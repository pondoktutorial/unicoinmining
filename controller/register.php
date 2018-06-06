<?php
if(isset($_POST['submitRegister'])){
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
$tokenregister=$tokenauth['message']['token'];
if(isset($tokenregister)){

  if(isset($_POST['submitRegister'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $errors=array();

if(strlen($email)<1){
  $errors['email']="Email must be field";
}else{
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email']="Email must valid";
  }
}

if(strlen($password)<1){
  $errors['password']="Password must be field";
}

if(strlen($phone)<1){
  $errors['phone']="Phone must be field";
}

if(strlen($fullname)<1){
  $errors['fullname']="Full Name must be field";
}


      
      $dataregister=['fullName'=>$_POST['fullname'],'email'=>$_POST['email'],'password'=>$_POST['password'],'phone'=>$_POST['phone'],'token'=>$tokenregister];
      $data_register = json_encode($dataregister);
      $registerch = curl_init('https://unicoin-api.appspot.com/api/member');
      curl_setopt($registerch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($registerch, CURLOPT_POSTFIELDS, $data_register);
      curl_setopt($registerch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($registerch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_register))
      );
      $registerresult = curl_exec($registerch);
      curl_close($registerch);
      $register=json_decode( $registerresult, true);
      if($register['status']==400){
        $errors['fromapi']=$register['message'];
      }
    // must what below here





  }
}

}

?>
