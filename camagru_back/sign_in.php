<?php
include_once 'header.php'
?>
  <div class="container login-container">
    <div class="login-form">
      <h2 class="text-center">Login</h2>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
        <div class="text-center mt-3">
            Don't have an account? <a href="sign_up.php"> Sign up</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>