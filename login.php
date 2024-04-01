<!-- khai bao su dung sesion de hien thi thong bao -->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="/css/login.css">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section class="vh-100" style="background-color: gray;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            <p>
                <?php
                    if (isset($_SESSION["thong_bao"])) {
                        echo $_SESSION["thong_bao"];
                        session_unset();
                    }
                ?>
            </p>

            <form action="login_submit.php" method="post">
              <div class="form-outline mb-4">
                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="username"/>
                <label class="form-label" for="typeEmailX-2">Email</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="typePasswordX-2">Password</label>
              </div>
  
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <label class="form-check-label" for="form1Example3"> Do you have an account? <a href="signup.php">Register</a></label>
              </div>
  
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
  
              <hr class="my-4">
  
              <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
              <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>