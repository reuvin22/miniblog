<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="background-color:  #29497C;">
    <a class="navbar-brand" href="index.php" style="color: white; font-weight: bold;">MiniBlog</a>
    <a class="nav-link active " aria-current="page" href="index.php" style="color: white; font-weight: bold;">Login</a>
  </div>
</nav>
    <div class="loginContainer">
        <div class="login">
            <form action="login.php" method="post">
                <legend>Login</legend>
                <hr>
                <input type="email" name="email" id="email" placeholder="Enter Email">
                <input type="password" name="pass" id="pass" placeholder="Enter Password">
                <div class="buttons" style="display:flex;">
                <button type="submit" name="login" class="btn btn-success mx-2">Login</button><a href="registration.php"><button type="button" class="btn btn-success">Register</button></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>