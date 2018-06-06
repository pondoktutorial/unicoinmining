<?php require_once('../view/parts/header.php');?>


<div class="main">
  <h4>Payment INVOICE <span class="invoice">#<?php echo $_SESSION['invoicenumber'];?></span></h4>
  <div class="invoice-box">
    <div class="row">
      <div class="col-4">
        <div class="invoice-location">
          <strong>From</strong>
          <p>PT. Unicoin Indonesia Inv PIK Avenue Mall DI Unit 6FI-C1 Jl. Pantai Indah Barat No. 1 Kamal Muara, Penjaringan Jakarta Utara DKI Jakarta 14470 Indonesia
          </p>
          <strong>Email: info@unicoin-mining.com</strong>
        </div>
      </div>
      <div class="col-4">
        <div class="invoice-location">
          <p><strong>To</strong></p>
          Ferri Suryadi
          <p><strong>Email:</strong> ferri.suryadi@example.com</p>

        </div>
      </div>
      <div class="col-4">
        <strong>Invoice #<?php echo $_SESSION['invoicenumber'];?></strong>
        <br>

        <strong>Order ID: <?php echo $_SESSION['ordernumber'];?></strong>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Description</th>
              <th>Contract Start</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <form action="/payment" method="post">
                  <input type="text" name="qty" id="" class="form-qty" value="1">
              </td>
              <td>
                <?php echo $_SESSION['productname']?>
              </td>
              <td>
                <?php echo $_SESSION['productdesc']?>
              </td>
              <td>
                <?php echo $_SESSION['contractstart']?>
              </td>
              <td class="subtotalprice">
                <?php echo $_SESSION['miningprice']?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Payment Methods:</p>
        <p><strong>Manual Transfer to BCA</strong></p>
        <p>6351.9999.91 a/n PT. Unicoin Indonesia Inv.</p>

      </div>
      <!-- /.col -->
      <div class="col-6">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td class="subtotalt" count="<?php echo $_SESSION['miningprice']?>">
                  <?php echo $_SESSION['miningprice']?>
                </td>
              </tr>
              <tr>
                <th>Unique </th>
                <td class="uniquet" count="<?php echo $_SESSION['unique'];?>"><span class="text-success">Rp. <?php echo $_SESSION['unique'];?></span></td>
              </tr>
              <tr>
                <th>Tax </th>
                <td>Rp. 0</td>
              </tr>

              <tr>
                <th>Total:</th>
                <td class="totalt">
                  <?php echo $_SESSION['miningprice']?>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="text-right">
          <input type="hidden" name="totalhidden" class="totalhidden" value="">
          <input type="hidden" name="subtotalhidden" class="subtotalhidden" value="">
          <button class="btn-info btn-sm" type="submit" name="tos">Term Of Service</button>
          <button type="submit" class="btn-success btn-sm" name="submitpayment">Submit Payment</button>
          </form>



        </div>

      </div>
      <!-- /.col -->
    </div>

  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="js/jquery.ticker.js"></script>
<script>
  $(document).ready(function() {
    var subtotal = $('.subtotalt').attr('count');
    var unique = $('.uniquet').attr('count');
    subtotals = subtotal.replace(",00", "");
    subtotala = subtotals.replace(/\./g, "");
    subtotalb = subtotala.replace('Rp ', "");
    var qty = 1;
    subtotalc = (subtotalb * qty) - unique;
    subtotald = (subtotalb * qty);


    function rupiah(bilangan) {
      var number_string = bilangan.toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

      if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
      return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    }

    $('.totalhidden').attr('value', subtotalc);
    $('.totalt').text("Rp. " + rupiah(subtotalc) + ",00");
    $('.form-qty').keyup(function() {
      var qty = $(this).val();
      subtotalc = (subtotalb * qty) - unique;
      subtotald = (subtotalb * qty);

      $('.subtotalhidden').attr('value', subtotald);
      $('.totalhidden').attr('value', subtotalc);
      $('.totalt').text("Rp. " + rupiah(subtotalc) + ",00");
      $('.subtotalprice').text("Rp. " + rupiah(subtotald) + ",00");
      $('.subtotalt').text("Rp. " + rupiah(subtotald) + ",00");

    });

    $('.totalhidden').attr('value', subtotalc);
    $('.subtotalhidden').attr('value', subtotald);

  });
</script>

</body>

</html>
