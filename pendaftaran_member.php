<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DATA USER</title>
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" href="assets/images/favicon.png" />
    <head>
    <body>
    <div class="main-panel">
            <div class="content-wrapper">
                <form action="pendaftaran_member.php" method="POST" >
                    <div class="page-header">
                        <h3 class="page-title"> PENDAFTARAN MEMBER </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="nomor" placeholder="Nomor">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_member">Nama Member</label>
                                            <input type="text" class="form-control" name="nama_member" placeholder="Nama Member">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No HP</label>
                                            <input type="text" class="form-control" name="no_hp" placeholder="No HP">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_lahir_member">Tanggal Lahir Member</label>
                                            <input type="date" class="form-control" name="tanggal_lahir_member" placeholder="Tanggal Lahir Member">
                                        </div>
                                        <div class="form-group">
                                            <label for="email_member">Email Member</label>
                                            <input type="text" class="form-control" name="email_member" placeholder="Email Member">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_ktp">No KTP</label>
                                            <input type="text" class="form-control" name="no_ktp" placeholder="No KTP">
                                        </div>
                                        
                                        <input type="submit"  value="Submit" name="proses" class="btn btn-primary mr-2">
                                        
                                    </form>

                                    <?php
                                        include "config.php";

                                        if(isset($_POST['proses'])) {
                                        mysqli_query($koneksi, "INSERT INTO data_member SET
                                        nomor = '$_POST[nomor]',
                                        nama_member = '$_POST[nama_member]',
                                        password = '$_POST[password]',
                                        no_hp = '$_POST[no_hp]',
                                        tanggal_lahir_member = '$_POST[tanggal_lahir_member]',
                                        email_member = '$_POST[email_member]',
                                        jenis_kelamin = '$_POST[jenis_kelamin]',
                                        no_ktp = '$_POST[no_ktp]'");
                                        
                                        header("location: login_member.php");
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