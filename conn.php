<?php
    $conn = new mysqli('localhost','root','','account');

    if(!$conn){
        echo 'Connection Failed';
    }
?>