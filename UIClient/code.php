<?php 
    session_start();
?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confirm</title>
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="../UIClient/css.css" />
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div></div>
                            </div>
                            <div class="col-6">
                                <b style="font-size:28px; color:white;">XÁC NHẬN</b>
                            </div>
                            <div class="col-3">
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <form class="myform" action="" method="POST">
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i style="font-size:26px"
                                        class="far fa-user fa-lg fa-fw"></i></span>
                            </div>
                            <input type="text" id="txtVerify" name="txtVerify" class="form-control rounded-0"
                                placeholder="Nhập mã xác nhận" required />
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" id="btnVerify" name="btnVerify"
                                class="col-md-5 btn btn-success btn-lg active float-right">
                                <i class="far fa-user pr-2"></i>Xác nhận
                            </button>
                            <a href="http://localhost/Travel/" class="col-md-5 btn btn-danger btn-lg active float-left">
                                <i class="fas fa-reply  pr-2"></i>Thoát
                            </a>
                        </div>
                    </form>
                    <p class="text-center mb-3 mt-2">Or use these to login</p>
                    <div class="row mx-auto ">
                        <div class="col-4"> <i class="fab fa-twitter"></i> </div>
                        <div class="col-4"> <i class="fab fa-facebook"></i> </div>
                        <div class="col-4"> <i class="fab fa-google"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="styles/js/script.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>

<?php
    include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
    if(isset($_GET['email']))
    {
        $email = $_GET['email'];
        $_SESSION['email'] = $email;
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $verifyQuery = mysqli_query($conn,$sql) or die("Lỗi");
        $row = mysqli_fetch_array($verifyQuery);
        if(isset($_POST['btnVerify']))
        {
            $otp = $_POST['txtVerify'];
            $_SESSION['txtVerify'] = $otp;
            if($otp == $row['OTP'])
            {              
                echo    "<script> 
                        alert('Xác thực đúng. Xin vui lòng đổi mật khẩu!');
                                location.href = 'http://localhost/Travel/UIClient/changePassword.php';
                    </script>";
            }
            else
            {
                echo "<script>
                        alert('Mã xác nhận của bạn không đúng. Xin vui lòng nhập lại!.');
                        window.location.href='http://localhost/Travel/UIClient/code.php?email=$email';
                    </script>";
            }
        }
    }
?>