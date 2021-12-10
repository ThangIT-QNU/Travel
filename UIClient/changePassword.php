<?php   
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
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
            <div class="col-12 col-md-8 col-lg-6 col-xl-6">
                <div class="card py-3 px-2">
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div></div>
                            </div>
                            <div class="col-6"><b style="font-size:28px; color:white;">ĐỔI MẬT KHẨU</b></div>
                            <div class="col-3">
                                <div></div>
                            </div>
                        </div>
                    </div>

                    <form class="myform" action="" method="POST" enctype="multipart/form-data">
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="txtPassWord" name="txtPassWord" class="form-control rounded-0"
                                placeholder="Nhập mật khẩu mới" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" name="txtRePassWord" class="form-control rounded-0"
                                placeholder="Nhập mật lại khẩu mới" required />
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="btnChange"
                                class="col-md-5 btn btn-success btn-lg active float-right">
                                <i class="far fa-user pr-2"></i>Đổi mật khẩu
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
    if(isset($_SESSION['txtVerify']) && isset($_SESSION['email']))
    {
        if(isset($_POST['btnChange']))
        {
            $code1 = $_SESSION['txtVerify'];
            $email = $_SESSION['email'];
            $passWord = $_POST['txtPassWord'];
            $rePassWord = $_POST['txtRePassWord'];
            $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,6);
            if($passWord == $rePassWord)
            {
                $sql = "UPDATE taikhoan set matKhau = '$passWord' where OTP = '$code1' AND email = '$email'";
                $query = mysqli_query($conn,$sql) or die('Connect Data Fail!');
                if($query)
                {
                    $sqlUpdate = "UPDATE khachsan SET OTP = '$code' WHERE email = '$email'";
                    mysqli_query($conn, $sqlUpdate);
                    echo '<script>
                            alert("Chúc mừng bạn đã đổi mật khẩu thành công! Vui lòng đăng nhập.");
                            window.location.href="http://localhost/Travel/UIClient/login.php"
                        </script>';
                }
                else{
                    echo '<script>
                            alert("Đổi mật khẩu thất bại! Xin vui lòng kiểm tra lại");
                            window.location.href="http://localhost/Travel/UIClient/changePassword.php"
                        </script>';
                }
            }
            else{
                echo '<script>
                        alert("Mật khật khẩu không trùng khớp. Vui lòng nhập lại!!");
                        window.location.href="http://localhost/Travel/UIClient/changePassword.php"
                    </script>';
            }
        }
    }
?>