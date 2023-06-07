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
            <form action="updateScript.php" method="POST">
                <?php
                    $sql = "SELECT * FROM `post` WHERE `user` = '$user'";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($query);
                ?>
                <h4>Edit Post - Post Title</h4>
                <label for="title">Enter Title</label>
                <input type="text" name="title" id="title" value="<?php echo $row['title']?>">
                <label for="content">Enter Content</label>
                <textarea name="content" id="content" cols="30" rows="3"><?php echo $row['content']?></textarea>
                <input type="hidden" name="user" value="<?php echo $user; ?>">
                <button type="submit" name="update" class="btn btn-success my-4 w-25">Save</button>
            </form>
        </div>
    </div>
</body>
</html>