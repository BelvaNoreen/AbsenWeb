<?php
    session_start();
    $user = "guru";
    $password = "guru123";
    $form_user = $_POST['username'];
    $form_pass = $_POST['password'];
    if(($form_user == $user) && ($form_pass == $password)){
        $_SESSION['username'] = $form_user;
        header("Location: ./tampil.php");
    } else {
        echo "SALAH cuy";
    }
?>