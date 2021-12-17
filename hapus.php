<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "Anda harus masuk sebagai panitia dahulu!";
        exit();
    }

    include './koneksi.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id= '$id' ";

    if($conn->query($sql)===TRUE){
        header('location:tampil.php?terhapus');
        
    }
    else{
        echo "Error :" .$sql. "<br>" . $conn->error;
    }

    $conn->close();



?>