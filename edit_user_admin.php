<?php
include "config.php";
$data = mysqli_query($koneksi, "SELECT * FROM administrator where nomor='$_GET[nomor]'");
$d = mysqli_fetch_array($data);
?>

<html>
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
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">MENU</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="data_user_admin.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">DATA USER</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="data_member_admin.php">
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
                                        <label for="nama_user">Nama User</label>
                                        <input type="text" class="form-control" name="nama_user" placeholder="Nama User" value="<?php echo $d['nama_user']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $d['password']; ?>">
                                    </div>
                                    <button type="submit"  value="Submit" name="proses" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                            
                                <?php
                                include "config.php";

                                if(isset($_POST['proses'])) {
                                mysqli_query($koneksi, "UPDATE administrator SET
                                nama_user = '$_POST[nama_user]',
                                password = '$_POST[password]'
                                WHERE nomor = '$_GET[nomor]'");

                                header("location: data_user_admin.php");
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