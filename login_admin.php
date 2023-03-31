<?php
session_start();
if(isset($_SESSION['nama_user']))    {
    header ("location : login.php");
}

include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>LOGIN MEMBER</title>
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                <h3 class="card-title text-left mb-3">Login Member</h3>
                                <form action="" method="POST">  
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control p_input" name="nama_user">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" class="form-control p_input" name="password">
                                    </div>
                                    <div class="text-center">
                                        <input input type="submit" value="Login" name="proses" class="btn btn-primary btn-block enter-btn"></button>
                                    </div>
                                    <br>
                                        <a href="pendaftaran_member.php">Pendaftaran Member</a>
                                    </br>
                                </form>

                                <?php
                                if(isset($_POST['proses'])) {
                                    $data = mysqli_query($koneksi, "SELECT * FROM administrator WHERE nama_user='$_POST[nama_user]' and password='$_POST[password]'");

                                    $cek = mysqli_num_rows($data);
                                    if($cek > 0){
                                        $_SESSION['nama_user'] = $_POST['nama_user'];

                                        header("location: data_user_admin.php");
                                    }else   {
                                        echo "Username dan Password salah !!";
                                        header("location: data_member.php");
                                    }
                                }

                                ?>
                            
                                <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                            
                                <script src="assets/js/off-canvas.js"></script>
                                <script src="assets/js/hoverable-collapse.js"></script>
                                <script src="assets/js/misc.js"></script>
                                <script src="assets/js/settings.js"></script>
                                <script src="assets/js/todolist.js"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>