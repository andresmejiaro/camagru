<?php
include_once 'header.php'
?>


  <div class="container form-container">
    <div class="form-box">
      <h2 class="text-center">Sign Up</h2>
      <form action="signup_send.php" method = "post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        <div class="text-center mt-3">
            Already have an account? <a href="sign_in.php"> Sign in</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>