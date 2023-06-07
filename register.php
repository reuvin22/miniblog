<?php
    include 'conn.php';
    if(isset($_POST['register'])){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conf = $_POST['conpass'];
        
        if($pass != $conf){
            echo "<script>alert('Password not match'); window.location.href = 'registration.php';</script>";
            exit;
        }else {
            $dbsql = "INSERT INTO `accounts`(`user`, `email`, `pass`) VALUES ('$user', '$email', '$pass')";
            $dbquery = mysqli_query($conn, $dbsql);
            header('location:index.php');
        }
        if(!$query){
            alert("Registration Failed");
        }
    }
    mysqli_close($conn);
?>