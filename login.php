<!DOCTYPE html>
<html>
<head>
  <title>Login Anggota Baru DNCC</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/login2.css">
  

</head>
<body style="background: #095077">
  
  <div class="login-page">
    <div class="form">
              <div class="form-header">
                <h3 class="app-brand"><span class="highlight" style="color: #095077">Login</span> DNCC</h3>
              </div>
              <form method="post">
                <input type="text" name="username" class="form-control" placeholder="username">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button name="log" class="btn btn-primary btn-submit">Log in</button>
              </form>
              <?php  
              include  'class.php';
              if (isset($_POST['log'])) {
                
                $check = $use->login($_POST['username'],$_POST['password']);
                
                if ($check == true) {
                  echo "<script>alert('Welcome new anggota DNCC');location='./'</script>";
                } else{

                  echo "<script>alert('Your username or password does not  match');</script>";
                }
              }
              ?>
            </div>
  </div>

  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>