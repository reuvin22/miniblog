<?php
    include 'conn.php';

    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE `post` SET title = '$title', content = '$content'";
        $query = mysqli_query($conn, $sql);

        header('Location:content.php');
    }
?>