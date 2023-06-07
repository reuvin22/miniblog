<?php
    include 'conn.php';
    session_start();
?>
 <div class="linkContainer">
            <h2>MiniBlog</h2>
            <div class="navbarContent">
                <h2>Hi! <?php $user = $_SESSION['user'];
                echo $user;?></h2>
                <a href="content.php">Home</a>
                <a href="logout.php">Logout</a>
    </div>
</div> 