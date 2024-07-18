<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Camagru</title>
  <style>
    .login-container {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    .login-form {
      max-width: 400px;
      width: 100%;
      padding: 15px;
      border-radius: 10px;
      background-color: #f7f7f7;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .login-form h2 {
      margin-bottom: 20px;
    }
    .login-form .form-group {
      margin-bottom: 15px;
    }
    .login-form .form-control {
      border-radius: 5px;
    }
    .login-form .btn {
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <a href="#" class="navbar-brand">Camagru</a>
      <div class="collapse navbar-collapse show">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#sign" class="nav-link">Sign in</a>
          </li>
          <li class="nav-item">
            <a href="#gallery" class="nav-link">Gallery</a>
          </li>
          <li class="nav-item">
            <a href="#editor" class="nav-link">Editor</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
          <a href="#">Don't have an account? Sign up</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>