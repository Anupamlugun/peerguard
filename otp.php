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
      <!-- Right Section -->
      <div class="col p-5 form-cont">
        <div class="mb-4">
          <h5 class="fw-bold text-center">
            Verify Email and Set New Password
          </h5>
        </div>
        <!-- Email OTP Verification Form -->
        <form>
          <!-- Email Input -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="yourname@gmail.com" required />
          </div>

          <!-- OTP Input -->
          <div class="mb-3">
            <label for="otp" class="form-label">Enter OTP</label>
            <input type="text" class="form-control" id="otp" placeholder="Enter OTP" required />
          </div>

          <!-- New Password Input -->
          <div class="mb-3">
            <label for="new-password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new-password" placeholder="••••••••" required />
          </div>

          <!-- Confirm New Password Input -->
          <div class="mb-3">
            <label for="confirm-new-password" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm-new-password" placeholder="••••••••" required />
          </div>

          <button type="submit" class="btn btn-primary w-100">
            Verify and Set Password
          </button>
        </form>

        <p class="text-center mt-4">
          Already have an account? <a href="index.php">Log in</a>
        </p>
      </div>
    </div>
  </div>

  <?php include "includes/footer-link.php" ?>
</body>

</html>