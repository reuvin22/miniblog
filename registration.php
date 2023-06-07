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
    <div class="registerContainer">
        <h2>Registration</h2>
        <div class="register">
            <form action="register.php" method="POST">
                <legend>See the Registration Rules</legend>
                <hr>
                <input type="text" name="user" id="user" placeholder="Enter Username" required>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
                <input type="password" name="pass" id="pass" placeholder="Enter Password" required>
                <input type="password" name="conpass" id="conpass" placeholder="Confirm Password" required>
                <button type="submit" name="register" class="btn btn-success" id="regBtn">Register</button></a>
                <span class="return">Return to the <a href="index.php" class="loginPage"><span>LOGIN PAGE</span>
            </form>
        </div>
    </div>
</body>
</html>