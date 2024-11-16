
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradient Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div class="bg-secondary">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <?php
                    include('koneksi.php');
                    if(isset($_POST['register'])){
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $no_telp = $_POST['no_telp'];
                        $password = md5($_POST['password']);
                        $alamat = $_POST['alamat'];
                        $level = $_POST['level'];

                        $insert = mysqli_query($koneksi, "INSERT INTO user (username,nama,email,password,alamat,no_telp,level) VALUES ('$username','$nama','$email','$password','$alamat','$no_telp','$level')");

                        if($insert){
                            echo '<script>alert("Register berhasil!"); location.href="login.php"</script>';
                        }else{
                            echo '<script>alert("Register gagal!")</script>';
                        }
                    }

                    ?>
                    <div class="signup-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST">
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Perpustakaan Online - Register</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label><strong>Nama Lengkap</strong></label>
                                    <input type="text" required name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Username</strong></label>
                                    <input type="text" required name="username" id="username" class="form-control" placeholder="Username">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Email</strong></label>
                                    <input type="email" required name="email" id="email" class="form-control" placeholder="Masukkan Email">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Nomor Telepon</strong></label>
                                    <input type="text" required name="no_telp" id="no_telp" class="form-control" placeholder="Nomor Telepon">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Password</strong></label>
                                    <input type="password" required name="password" id="password" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Alamat</strong></label>
                                    <textarea name="alamat" required id="alamat" cols="30" rows="5" class="form-control" style="resize: none;" placeholder="Alamat"></textarea>
                                    <span class="md-line"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Roles</strong></label>
                                    <select name="level" required id="level" class="form-control">
                                        <option value="peminjam">Peminjam</option>
                                    </select>
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="register" id="register" value="register" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Register</button>
                                        <a href="login.php" class="btn btn-link btn-md btn-block waves-effect">Sudah mempunyai akun? Login disini</a>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
        </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
