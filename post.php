<?php
    include 'conn.php';
    session_start();
    $user = $_SESSION['user'];
?>
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
    <div class="links">
        <h5>Hi <?php echo $user;?></h5>
        <a class="nav-link active " aria-current="page" href="content.php" style="color: white; font-weight: bold;">Home</a>
        <a class="nav-link active " aria-current="page" href="logout.php" style="color: white; font-weight: bold;">Logout</a>
    </div>
  </div>
</nav>
    <div class="createPost">
        <div class="create">
            <form action="insertPost.php" method="POST">
                <h4>CREATE POST!</h4>
                <input type="text" name="title" id="title" placeholder="Enter Title">
                <label for="content">Enter Content</label>
                <textarea name="content" id="content" cols="30" rows="4"></textarea>
                <input type="hidden" name="user" value="<?php echo $user; ?>">
                <button type="submit" name="post" class="btn btn-success" id="post">POST</button>
            </form>
        </div>
    </div>
</body>
</html>