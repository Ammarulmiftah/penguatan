<?php
    $user = $_POST['username'];
    $pass = $_POST['password']; 

    if ($user == "schoolmart" && $pass == "schoolmart") {
        # code...
        header("location: dashboard.php");
    }else{
        echo("Gagal");
    }

?>