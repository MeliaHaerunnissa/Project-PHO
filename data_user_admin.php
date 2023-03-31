<?php
include "config.php";
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
<div class="container-scroller">
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
            <div class="row">  
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <a href="tambah_data_user.php"> Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Member</th>
                                            <th>Password</th>
                                            <th colspan="2">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "config.php";
                                        $data = mysqli_query ($koneksi, "SELECT * FROM administrator");
                                        while ($d = mysqli_fetch_array($data))  {
                                            ?>
                                            <tr>
                                                <td><?php echo $d['nomor']; ?></td>
                                                <td><?php echo $d['nama_user']; ?></td>
                                                <td><?php echo $d['password']; ?></td>
                                                <td>
                                                    <a href="edit_user_admin.php?nomor=<?php echo $d['nomor']; ?>">Edit</a>
                                                    <a href="?nomor=<?php echo $d['nomor']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                            <?php
                                        }
                                        ?>
                                        </table>
                                        <?php
                                        if(isset($_GET['nomor']))   {
                                        mysqli_query($koneksi, "DELETE FROM administrator WHERE nomor='$_GET[nomor]'");
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
                                    </body>
                                </html>