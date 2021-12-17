<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        echo "Anda harus masuk sebagai panitia dahulu!";
        exit();
    }

    include './koneksi.php';

    $id = $_POST['id'];
    $first = $_POST ['first'];
    $last = $_POST ['last'];
    $nis = $_POST['nis'];
    $email = $_POST ['email'];
    $pilihan = $_POST ['pilihan'];

    $sql = sprintf("UPDATE siswa SET first_name='%s', last_name='%s', nis='%s', email='%s', kelas='%s' WHERE id='%s'",
            $first,
            $last,
            $nis,
            $email,
            $pilihan,
            $id
    );
    if($conn->query($sql) === TRUE){
        header("Location: tampil.php?sukses");
    } else {
        echo "Kesalahan: " . $conn->error;
        echo "<br><code>$sql</code>";
    }
?>