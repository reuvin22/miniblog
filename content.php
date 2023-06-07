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
    <div id="posts">
        <?php
            $sql = "SELECT * FROM post WHERE user = '$user'";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($query)){
        ?>
        <div class="posts">
            <h2><?php echo $row['title']; ?></h2>
            <h5><?php echo $row['content']; ?></h5>
            <h5><?php echo $row['created_at']; ?></h5>
            <hr>
            <a href="delete.php?deleteuser=<?php echo $row['user']; ?>"><button type="button" class="btn btn-danger mx-2">Delete</button></a><a href="update.php?updateuser=<?php echo $row['user']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
        </div>
        <?php
            }
        ?>
        <div class="createCont">
            <div class="create">
                <a href="post.php"><button class="btn btn-primary mx-4">CREATE NEW POST</button></a>
            </div>
        </div>
    </div>

</body>
</html>