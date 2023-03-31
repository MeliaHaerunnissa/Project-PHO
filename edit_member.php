<?php
include "config.php";
$data = mysqli_query($koneksi, "SELECT * FROM data_member where nomor='$_GET[nomor]'");
$d = mysqli_fetch_array($data);
?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DATA USER</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="assets/images/favicon.png" />
    <head>
    <body>  
    <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">MENU</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="pendaftaran_member.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">PENDAFTARAN MEMBER</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="data_member.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">DATA MEMBER</span>
            </a>
          </li>
        </ul>
    </nav>
    <div class="main-panel">
        <div class="content-wrapper">
            <form action="" method="POST" >
                <div class="page-header">
                    <h3 class="page-title"> EDIT DATA USER </h3>
                </div>
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="nomor" placeholder="Nomor" value="<?php echo $d['nomor']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_member">Nama Member</label>
                                        <input type="text" class="form-control" name="nama_member" placeholder="Nama Member" value="<?php echo $d['nama_member']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password"value="<?php echo $d['password']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No HP</label>
                                        <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $d['no_hp']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir_member">Tanggal Lahir Member</label>
                                        <input type="date" class="form-control" name="tanggal_lahir_member" placeholder="Tanggal Lahir Member" value="<?php echo $d['tanggal_lahir_member']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_member">Email Member</label>
                                        <input type="text" class="form-control" name="email_member" placeholder="Email Member" value="<?php echo $d['email_member']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $d['jenis_kelamin']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ktp">No KTP</label>
                                        <input type="text" class="form-control" name="no_ktp" placeholder="No KTP" value="<?php echo $d['no_ktp']; ?>">
                                    </div>
                                    <input type="submit" value="Submit" name="proses" class="btn btn-primary mr-2">
                                </form>

                                <?php
                                include "config.php";

                                if(isset($_POST['proses'])) {
                                mysqli_query($koneksi, "UPDATE data_member SET
                                nama_member = '$_POST[nama_member]',
                                password = '$_POST[password]',
                                no_hp = '$_POST[no_hp]',
                                tanggal_lahir_member = '$_POST[tanggal_lahir_member]',
                                email_member = '$_POST[email_member]',
                                jenis_kelamin = '$_POST[jenis_kelamin]',
                                no_ktp = '$_POST[no_ktp]'
                                WHERE nomor = '$_GET[nomor]'");

                                header("location: data_member.php");
                                }

                                ?>

                                <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                                <!-- endinject -->
                                <!-- Plugin js for this page -->
                                <!-- End plugin js for this page -->
                                <!-- inject:js -->
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
</body>
<html>