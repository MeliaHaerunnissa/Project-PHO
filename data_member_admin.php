<?php
include "config.php";
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DATA MEMBER</title>
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="assets/css/style.css">
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
                            <h4 class="card-title">DATA MEMBER</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Member</th>
                                            <th>Password</th>
                                            <th>No Hp</th>
                                            <th>Tanggal Lahir Member</th>
                                            <th>Email Member</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No KTP</th>
                                            <th colspan="2">Opsi</th>
                                        </tr>
                                    </thead>
                                    
                                        <?php
                                        include "config.php";
                                        $data = mysqli_query ($koneksi, "SELECT * FROM data_member");
                                        while ($d = mysqli_fetch_array($data))  {
                                            ?>
                                            <tr>
                                                <td><?php echo $d['nomor']; ?></td>
                                                <td><?php echo $d['nama_member']; ?></td>
                                                <td><?php echo $d['password']; ?></td>
                                                <td><?php echo $d['no_hp']; ?></td>
                                                <td><?php echo $d['tanggal_lahir_member']; ?></td>
                                                <td><?php echo $d['email_member']; ?></td>
                                                <td><?php echo $d['jenis_kelamin']; ?></td>
                                                <td><?php echo $d['no_ktp']; ?></td>
                                                <td>
                                                    <a href="edit_member_admin.php?nomor=<?php echo $d['nomor']; ?>">Edit</a>
                                                    <a href="?nomor=<?php echo $d['nomor']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            </table>
                                            <?php
                                            if(isset($_GET['nomor']))   {
                                                mysqli_query($koneksi, "DELETE FROM data_member WHERE nomor='$_GET[nomor]'");
                                            }
                                            ?>
                                            

                                        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
                                        <script src="assets/js/off-canvas.js"></script>
                                        <script src="assets/js/hoverable-collapse.js"></script>
                                        <script src="assets/js/misc.js"></script>
                                        <script src="assets/js/settings.js"></script>
                                        <script src="assets/js/todolist.js"></script>
                                    </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
