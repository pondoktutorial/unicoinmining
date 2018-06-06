<?php require_once('../view/parts/header.php');?>



<div class="main">
  <h4>Wallet</h4>
  <div class="row">
    <div class="col-4">
      <div class="box-confirmation">
        <form action="/wallet" method="post">
          <div class="form-group">
            <input type="text" name="wallet" id="" class="form-control" placeholder="Your BTC Wallet">
            <br>
            <button type="submit" class="btn btn-primary" name="submitWallet">Submit</button>
            <?php print_r($walletresult);print_r($data_wallet);?>
          </div>
        </form>
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
