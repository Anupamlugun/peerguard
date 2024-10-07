<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <?php include "includes/header-links.php" ?>
  <link rel="stylesheet" href="css/signup.css">
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
        <!-- Signup Form -->
        <form action="" method="POST">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required />
            </div>
            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-control" id="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="age" class="form-label">Age</label>
              <input type="number" class="form-control" id="age" placeholder="Enter your age" required />
            </div>
            <div class="col-md-6">
              <label for="profession" class="form-label">Profession</label>
              <input type="text" class="form-control" id="profession" placeholder="Enter your profession" required />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="yourname@gmail.com" required />
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter your phone no." required />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" required />
            </div>
            <div class="col-md-6">
              <label for="confirm-password" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirm-password" required />
            </div>
          </div>

          <div class="row mb-3 text-bg-danger text-center" id="usernam_msg"></div>
          <div class="row mb-3">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary w-100" onclick="signup_validation()">
                Sign Up
              </button>
            </div>
          </div>
        </form>

        <p class="text-center mt-4">
          Already have an account? <a href="index.php">Log in</a>
        </p>
      </div>
    </div>
  </div>

  <?php include "includes/footer-link.php" ?>
  <script src="fetch/signup_validation.js"></script>
</body>

</html>