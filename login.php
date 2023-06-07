<?php
    session_start();
    include 'conn.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM accounts WHERE email = '$email'";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $loginEmail = $row['email'];
            $loginPass = $row['pass'];

            if($email == $loginEmail && $pass == $loginPass){
                $_SESSION['user'] = $row['user'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user'] = $row['user'];
                echo "<script>alert('Login Successfully'); window.location.href = 'content.php';</script>";
            }else {
                echo "<script>alert('Username or Pasword incorrect!'); window.location.href = 'index.php';</script>";
            }
        }else {
            echo "<script>alert('Username or Pasword incorrect!'); window.location.href = 'index.php';</script>";
        }
    }else {
        echo "<script>alert('Username or Pasword incorrect!'); window.location.href = 'index.php';</script>";
    }
    mysqli_close($conn);
?>