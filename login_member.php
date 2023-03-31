<?php
session_start();
if(isset($_SESSION['email_member']))    {
    header ("location : data_member.php");
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
                                        <label>Email Member</label>
                                        <input type="text" class="form-control p_input" name="email_member">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="password" class="form-control p_input" name="password">
                                    </div>
                                    <div class="text-center">
                                        <input input type="submit" value="Login" name="proses" class="btn btn-primary btn-block enter-btn"></button>
                                    </div>
                                </form>

                                <?php
                                if(isset($_POST['proses'])) {
                                    $data = mysqli_query($koneksi, "SELECT * FROM data_member WHERE email_member='$_POST[email_member]' and password='$_POST[password]'");
                                    $cek = mysqli_num_rows($data);
                                        if($cek > 0){
                                            $_SESSION['email_member'] = $_POST['email_member'];
                                            header("location: data_member.php");
                                        }else{
                                            header("location: login_member.php");
                                        }
                                    }
                                ?>