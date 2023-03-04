<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">APOLO</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit"><a class="text-decoration-none"href="loginForm.php">Login</a></button>
      </form>
    </div>
  </div>
</nav>
    <h1 class="text-center mt-5">Register Form</h1>
    <div class="formRegiste container bg-light d-flex align-items-center justify-content-center w-50 p-5">
    <form action="code.php" method="POST" class="w-100 ">
                <div class="modal-body">
                  <div class="form-group">
                      <label class="col-form-label"> Fist name </label>
                      <input type="text" name="fistName" required class="form-control" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                      <label class="col-form-label">last name</label>
                      <input type="text" name="lastName" required class="form-control checking_email" placeholder="last name ">
                      <small class="error_email" style="color: red;"></small>
                  </div>
                  <div class="form-group">
                      <label class="col-form-label">admin username</label>
                      <input type="text" name="username" required class="form-control" placeholder="User name">
                  </div>
                  <div class="form-group">
                      <label class="col-form-label">password</label>
                      <input type="password" name="password" required class="form-control" placeholder="password">
                  </div>
                  <div class="form-group">
                      <label class="col-form-label">confirm password</label>
                      <input type="password" name="confirm_password" required class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                      <label class="col-form-label">email</label>
                      <input type="Email" name="email"  required class="form-control" placeholder="Email">
                  </div>
                  <div class="modal-footer mt-5">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <button type="submit" name="registerbtnAdmin"class="btn btn-primary">Save </button>
                   </div>
                  
              </div>
                    
                </form>
    </div>
    <div class="text-center p-2 mt-5" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="">konkhkea.com</a>
    </div>
</body>
</html>