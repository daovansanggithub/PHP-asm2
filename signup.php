<!-- khoi tao session -->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
    <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <!-- thônng báo -->
            <p>
                <!-- in ra thong bao bang sesion -->
                <?php
                    if (isset($_SESSION["thong_bao"])) {
                        // hien thi thong bao
                        echo $_SESSION["thong_bao"];
                        // xoa thong bao
                        session_unset();
                    }
                ?>
            </p>
            <!--  -->
            <form action="signup_submit.php" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" name="username"/>
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example3" class="form-control" name="password"/>
                <label class="form-label" for="form3Example3">Password</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="re_password"/>
                <label class="form-label" for="form3Example4">Re-Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
                Sign up
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Do you already have an account? <a href="login.php">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>
</html>