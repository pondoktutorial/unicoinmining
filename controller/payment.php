<?php
session_start();
if(!isset($_SESSION['token'])){
  header('location:/login');
  exit();
}
if(isset($_POST['submitpayment'])){

  $ordernumber=$_SESSION['ordernumber'];
  $invoicenumber=$_SESSION['invoicenumber'];
  $paymentmethod="Manual Transfer";
  $totalorder=str_replace("Rp.","",$_SESSION['miningprice']);
  $total=str_replace(".","",$totalorder);
  $totals=(int)str_replace(",00","",$total);
  $uniquenumber=$_SESSION['unique'];

  $tax=0;
  $totalpayment=$totals-$uniquenumber;
$hashpower=(int)str_replace("GH/s","",$_SESSION['miningpower']);
$qty=$_POST['qty'];
$salesOrderLine=array('data'=>[array("productId"=>$_SESSION['productid'],"qty"=>$qty)]);




  $datapayment=['orderNo'=>$ordernumber,'invoiceNo'=>$invoicenumber,'paymentMethod'=>$paymentmethod,'totalOrder'=>$_POST['subtotalhidden'],'uniqueNumber'=>$uniquenumber,'tax'=>0,'totalAmountToPaid'=>$_POST['totalhidden'],'salesOrderLineCount'=>1,'totalHashPower'=>$hashpower,"salesOrderLine"=>$salesOrderLine];
  $data_payment = json_encode($datapayment);

  $paymentch = curl_init('https://unicoin-api.appspot.com/api/orders');
  curl_setopt($paymentch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($paymentch, CURLOPT_POSTFIELDS, $data_payment);
  curl_setopt($paymentch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($paymentch, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_payment),
      'Authorization: Bearer '.$_SESSION['token']
    )
  );
  $paymentresult = curl_exec($paymentch);
  curl_close($paymentch);
  $paymentdone=json_decode( $paymentresult, true);
  header('location:/orders');
  exit();

}
?>
