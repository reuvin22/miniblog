<?php
    include 'conn.php';
    date_default_timezone_set('Asia/Manila');

    if(isset($_POST['post'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $user = $_POST['user'];
        $created_at = date('jS \of F Y h:i:s A');

        $sql = "INSERT INTO `post`(`user`, `title`, `content`, `created_at`) VALUES('$user', '$title', '$content', '$created_at')";
        $query = mysqli_query($conn, $sql);
        header('location: content.php');
    }
?>