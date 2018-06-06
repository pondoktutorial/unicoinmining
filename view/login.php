<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unicoin Member Area</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
</head>
<body>

  <!-- Form Login -->
  <form class="form" method="post" action="/login">
   <div class="form-Logo">
     <img src="https://unicoin-mining.com/wp-content/uploads/2018/04/Logo-Registration.png" alt="" height="60">
   </div>
   <div class="form-header">
     <h3>Login Member</h3>
     <p>Ready To Start Mining Now?</p>
   </div>

   <div class="form-label-group">
     <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
     <label for="inputEmail">Email address</label>
   </div>

   <div class="form-label-group">
     <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
     <label for="inputPassword">Password</label>
   </div>

   <!-- <div class="checkbox mb-3">
     <label>
       <input type="checkbox" value="remember-me"> Remember me
     </label>
   </div> -->

   <?php if(isset($errors['fromapi'])){?>
   <div class="alert alert-warning" role="alert">
<?php echo $errors['fromapi'];?>
</div>
<?php }?>
   <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitLogin">Sign in</button>
   <p class="mt-5 mb-3 text-muted text-center">Unicoin Mining &copy; 2017-2018</p>
 </form>
  <!-- End Form Login -->
</body>
</html>
