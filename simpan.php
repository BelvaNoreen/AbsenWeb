<?php
    include './koneksi.php';

    $first = $_POST ['first'];
    $last = $_POST ['last'];
    $nis = $_POST['nis'];
    $email = $_POST ['email'];
    $pilihan = $_POST ['pilihan'];

    $sql = "INSERT INTO siswa(first_name, last_name, nis, email, kelas) VALUES ('$first', '$last', '$nis', '$email', '$pilihan')";
    if($conn->query($sql) === TRUE){
        // echo "Anda terdaftar";
       header('location:terdaftar.php');
    }else{echo "Error:" . $sql . "<br>" . $conn->error;}
    $conn->close();

?>