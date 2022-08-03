<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Sistem Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
<link href="../BPK2M/assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    
<form class="form-signin" method="POST" action="cekLogin.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="../BPK2M/assets/brand/download.jpg" alt="logo" width="250" height="">
    <h1 class="h3 mb-3 font-weight-normal"> Selamat Datang</h1>
    <p>Di Aplikasi BPK2M</a></p>
  </div>

  <div class="form-label-group">
    <input type="text" name="username" class="form-control" placeholder="Masukan username anda" required autofocus>
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>
 

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; <?= date('Y')?></p>
</form>


    
  </body>
</html>
