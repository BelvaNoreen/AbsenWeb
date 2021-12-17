<?php 
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cek Pendaftaran</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-danau">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card border-0 o-hidden shadow-lg efek-kaca text-white">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <div id="panel-register-check" class="panel text-center">
                                    <?php
                                        if(isset($_GET['404'])){
                                            echo '<div class="alert alert-danger">NISN tidak ditemukan!</div>';
                                        }
                                    ?>
                                    <h1>Cek Pendaftaran</h1>
                                    <p>Masukkan NISN Anda:</p>
                                    <form action="cek_pendaftaran.php" method="post" class="user login mt-1">
                                        <div class="form-group">
                                            <input type="text" name="nisn" class="form-control form-control-user efek-kaca text-center" placeholder="Nomor Induk Sekolah Nasional" >
                                        </div>
                                        <div class="text-right">
                                            <a href="./index.php" class="btn btn-default text-white float-left">Kembali</a>
                                            <button type="submit" class="btn btn-primary">Cek</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <?php 
                            if(isset($_POST['nisn'])){
                                include "./koneksi.php";
                                $nisn = $_POST['nisn'];
                                $sql = "SELECT * FROM formulir WHERE nisn = '$nisn'";
                                $result = $conn->query($sql);
                                $result_total = $result->num_rows;
                                if($result_total === 1){
                                    $data = $result->fetch_array();
                        ?>

                        <div class="col efek-kaca">
                            <div class="card-body">
                                <div class="form-group">
                                    <small>NISN</small>
                                    <p><?php echo $data['nisn']; ?></p>
                                </div>
                                <div class="form-group">
                                    <small>Nama</small>
                                    <p><?php echo $data['first_name'] . " " . $data['last_name']; ?></p>
                                </div>
                                <div class="form-group">
                                    <small>Asal Sekolah</small>
                                    <p><?php echo $data['asal_sekolah']; ?></p>
                                </div>
                                <div class="form-group">
                                    <small>Email</small>
                                    <p><?php echo $data['email']; ?></p>
                                </div>
                                <div class="form-group">
                                    <small>Lomba Dipilih</small>
                                    <p><?php echo $data['lomba']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                } else {
                                    header("Location: cek_pendaftaran.php?404");
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>