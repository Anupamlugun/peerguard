<!DOCTYPE html>
<html lang="en" style="height:100%">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <?php include "includes/header-links.php" ?>
</head>

<body>
  <div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="row shadow-lg rounded-4 overflow-hidden" style="max-width: 900px">
      <div class="col form-cont">
        <div>
          <!-- Logo -->
          <div class="text-center">
            <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-width: 170px" />
          </div>
        </div>

        <!-- Form -->
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="login@gmail.com" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" />
            <a href="otp.php" class="text-muted small d-block text-end mt-1">
              Forgot Password?
            </a>
          </div>
          <div class="row mb-3 text-bg-danger text-center" id="usernam_msg"></div>
          <button type="button" class="btn btn-primary w-100" onclick="login()">Login</button>
        </form>

        <p class="text-center mt-4">
          Don't have an account? <a href="signup.php">Sign up</a>
        </p>
      </div>
    </div>
  </div>

  <?php include "includes/footer-link.php" ?>
  <script src="fetch/login.js"></script>
</body>

</html>