<?php
    include 'conn.php';
    if(isset($_GET['deleteuser'])){
        $user = $_GET['deleteuser'];

        $sql = "DELETE FROM post WHERE user= '$user' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        header("location: content.php");
    }
?>