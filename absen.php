<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Form Absen</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">

    </head>

    <body class="bg-langit">
        <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-12">
            <div class="card border-0 efek-kaca shadow-lg my-5">
                <div class="card-body ">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center ">
                        <div class="col-lg-12 col-md-12">  
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-500 mb-4">Absen Siswa</h1>
                                </div>
                                <div id="panel-register-form">
                                    <form class="user" action="simpan.php" method="post">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user efek-kaca border-0" id="input-firstname" name="first"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user efek-kaca border-0" id="input-lastname" name="last"
                                                    placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user efek-kaca border-0" id="input-nis" name="nis"
                                                placeholder="NIS">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user efek-kaca border-0" id="input-email" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group ">
                                            <select class="form-control form-control-user efek-kaca border-0 " style="padding: 1em; height:auto;" aria-label="Default select example" id="input-kelas" name="pilihan">
                                                <option value="" selected>Pilih Kelas</option>
                                                <option value="XI RPL 1">XI RPL 1</option>
                                                <option value="XI RPL 2">XI RPL 2</option>
                                                <option value="XI RPL 3">XI RPL 3</option>
                                            </select>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <!-- <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleRepeatPassword" placeholder="Repeat Password">
                                            </div>
                                        </div> -->
                                        <button type="button" id="button-register-lanjut" class="btn btn-primary btn-user btn-block">
                                            Lanjutkan
                                        </button>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                        </a> -->
                                    </form>
                                </div>
                                <div id="panel-register-confirm" style="display: none;">
                                    <div class="form-group">
                                        <small>NIS</small>
                                        <p id="text-nis"></p>
                                    </div>
                                    <div class="form-group">
                                        <small>Nama</small>
                                        <p id="text-nama"></p>
                                    </div>
                                    <div class="form-group">
                                        <small>Email</small>
                                        <p id="text-email"></p>
                                    </div>
                                    <div class="form-group">
                                        <small>Kelas</small>
                                        <p id="text-kelas"></p>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" id="button-register-back" class="btn btn-default btn-user">Perbaiki Data</button>
                                        <button type="button" id="button-register-submit" class="btn btn-primary btn-user">Daftar</button>
                                    </div>
                                </div>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
                                </div> -->
                            </div>
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

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        
        <script>
            $("#button-register-lanjut").on("click", function(e){
                var input_kosong = false;
                $("#panel-register-form form input, #panel-register-form form select").each(function(){
                    if($(this).val().length === 0){
                        $(this).focus();
                        input_kosong = true;
                        return;
                    }
                });
                if(input_kosong) return;
                $("#text-nama").text($("#input-firstname").val() + " " + $("#input-lastname").val());
                $("#text-nis").text($("#input-nis").val());
                $("#text-email").text($("#input-email").val());
                $("#text-kelas").text($("#input-kelas").val());
                $("#panel-register-form").hide();
                $("#panel-register-confirm").show();
            });
            $("#button-register-back").on("click", function(e){
                $("#text-nama, #text-nis, #text-email, #text-kelas").text("");
                $("#panel-register-form").show();
                $("#panel-register-confirm").hide();
            });
            $("#button-register-submit").on("click", function(e){
                $("#panel-register-form form").submit();
            });
        </script>

    </body>

</html>