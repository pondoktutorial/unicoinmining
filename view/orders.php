<?php require_once('../view/parts/header.php');?>



<div class="main">
  <h4>Orders</h4>
  <div class="order-list">
    <div class="row">
      <?php

        $orderslist=$orders['message']['data'];
        $num=1;
        if(isset($_POST['submitOrder'])){
          session_start();
          function incrementalHash($len = 6){
  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $base = strlen($charset);
  $result = '';

  $now = explode(' ', microtime())[1];
  while ($now >= $base){
    $i = $now % $base;
    $result = $charset[$i] . $result;
    $now /= $base;
  }
  return substr($result, -$len);
}
function assign_rand_value($num) {

    // accepts 1 - 36
    switch($num) {
        case "1"  : $rand_value = "a"; break;
        case "2"  : $rand_value = "b"; break;
        case "3"  : $rand_value = "c"; break;
        case "4"  : $rand_value = "d"; break;
        case "5"  : $rand_value = "e"; break;
        case "6"  : $rand_value = "f"; break;
        case "7"  : $rand_value = "g"; break;
        case "8"  : $rand_value = "h"; break;
        case "9"  : $rand_value = "i"; break;
        case "10" : $rand_value = "j"; break;
        case "11" : $rand_value = "k"; break;
        case "12" : $rand_value = "l"; break;
        case "13" : $rand_value = "m"; break;
        case "14" : $rand_value = "n"; break;
        case "15" : $rand_value = "o"; break;
        case "16" : $rand_value = "p"; break;
        case "17" : $rand_value = "q"; break;
        case "18" : $rand_value = "r"; break;
        case "19" : $rand_value = "s"; break;
        case "20" : $rand_value = "t"; break;
        case "21" : $rand_value = "u"; break;
        case "22" : $rand_value = "v"; break;
        case "23" : $rand_value = "w"; break;
        case "24" : $rand_value = "x"; break;
        case "25" : $rand_value = "y"; break;
        case "26" : $rand_value = "z"; break;
        case "27" : $rand_value = "0"; break;
        case "28" : $rand_value = "1"; break;
        case "29" : $rand_value = "2"; break;
        case "30" : $rand_value = "3"; break;
        case "31" : $rand_value = "4"; break;
        case "32" : $rand_value = "5"; break;
        case "33" : $rand_value = "6"; break;
        case "34" : $rand_value = "7"; break;
        case "35" : $rand_value = "8"; break;
        case "36" : $rand_value = "9"; break;
    }
    return $rand_value;
}

function get_rand_alphanumeric($length) {
    if ($length>0) {
        $rand_id="";
        for ($i=1; $i<=$length; $i++) {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(1,36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

function get_rand_numbers($length) {
    if ($length>0) {
        $rand_id="";
        for($i=1; $i<=$length; $i++) {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(27,36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

function get_rand_letters($length) {
    if ($length>0) {
        $rand_id="";
        for($i=1; $i<=$length; $i++) {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(1,26);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}
          $_SESSION['productname']=$_POST['productname'];
          $_SESSION['productdesc']=$_POST['productdesc'];
            $_SESSION['contractstart']=$_POST['contractstart'];
            $_SESSION['miningprice']=$_POST['miningprice'];
            $_SESSION['miningpower']=$_POST['miningpower'];
            $_SESSION['ordernumber']=mt_rand(10000, 99999);
            $_SESSION['invoicenumber']=strtoupper(get_rand_alphanumeric(6));
            $_SESSION['productid']=$_POST['submitOrder'];

            $uniquenumber=(int)substr($_SESSION['ordernumber'], -3);
            $_SESSION['unique']=$uniquenumber;
            header('location:/payment');
            exit();
        }
        foreach ($orderslist as $orderitem) {
          // code...

      ?>

      <div class="col-3">

        <div class="order-item">
          <h3><?php echo $orderitem['productName'];?></h3>
          <ul>
            <li><?php echo $orderitem['productDescription'];?></li>
            <li><?php echo $orderitem['contractExpired'];?></li>
            <li><?php echo $orderitem['contractStart'];?></li>
          </ul>
          <div class="speed">
            <h3><?php echo $orderitem['miningPower'];?></h3>
          </div>
          <div class="price">
            <h3><?php echo $orderitem['miningPrice'];?></h3>
          </div>
          <div class="price">
            <h3><?php echo $orderitem['stock'];?></h3>
          </div>
          <ul>
            <li>Maximum Orders <?php echo $orderitem['maximumThreshold'];?></li>
          </ul>
<form class="" action="/orders" method="post">
  <input type="hidden" name="productname" value="<?php echo $orderitem['productName'];?>">
  <input type="hidden" name="productdesc" value="<?php echo $orderitem['productDescription'];?>">
  <input type="hidden" name="contractstart" value="<?php echo $orderitem['contractStart'];?>">
  <input type="hidden" name="miningpower" value="<?php echo $orderitem['miningPower'];?>">
  <input type="hidden" name="miningprice" value="<?php echo $orderitem['miningPrice'];?>">

  <button type="submit" name="submitOrder" value="<?php echo $orderitem['productId'];?>" class="btn btn-success btn-block">Buy</button>
</form>

        </div>
      </div>
  <?php }?>
    </div>
    <div class="orderHistory">
      <h4>ORDER HISTORY</h4>

      <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Order Created</th>
					<th>Product</th>
                    <th>Hash Power</th>
                    <th>Term</th>
					<th>Contract Start</th>
					<th>Contract End</th>
					<th>Total</th>
          <th>Payment Status</th>
          <th>Confirm Payment</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php   $ordershistorylist=$ordershistory['message']['data'];
                    foreach ($ordershistorylist as $orderhistoryitem) {
                      // code...
                    ?>

                  <tr>
                    <td><?php echo $orderhistoryitem['orderCreated']?></td>
                    <td><?php echo $orderhistoryitem['name']?></td>
                    <td><?php echo $orderhistoryitem['hashPower']?></td>
					<td><a href="../PageUnicoin/invoice-term.html">Lifetime</a></td>
                    <td><?php echo $orderhistoryitem['contractStart']?></td>
					<td><?php echo $orderhistoryitem['contractEnd']?></td>
					<td><?php echo $orderhistoryitem['total']?></td>
          <td><span class="badge <?php
              if($orderhistoryitem['paymentStatus']=='Paid'){
                echo 'badge-success';
              }elseif($orderhistoryitem['paymentStatus']=='Waiting Confirmation'){
                echo 'badge-warning';
              }else{
                echo 'badge-danger';
              }

          ?>"><?php echo $orderhistoryitem['paymentStatus']?></span></td>
          <td><a href="/confirm/<?php echo $orderhistoryitem['id']?>" class="btn btn-sm btn-info btn-upload">Upload Receipt</a></td>


                  </tr>
                  <?php
                }
                  ?>

                  </tbody>
                </table>
              </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/jquery.ticker.js"></script>
  

  </body>
</html>
