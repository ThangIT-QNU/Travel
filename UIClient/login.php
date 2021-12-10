<?php 
    ob_start();
    session_start();

    ////////////////////////////////
    include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";

    if (isset($_POST['btnLogin']))
    {
        $UserName = $_POST['txtUserName'];
        $PassWord = $_POST['txtPassWord'];

        $sql = "SELECT * FROM taikhoan WHERE tenTaiKhoan = '".$UserName."' AND matKhau = '".$PassWord."'";
        $result = mysqli_query($conn, $sql);
        if($num = mysqli_fetch_array($result))
        {
          $_SESSION['taiKhoan'] = $num['tenTaiKhoan'];
          $_SESSION['phanQuyen'] = $num['phanQuyen'];
          $_SESSION['idTaikhoan'] = $num['idTaiKhoan'];
        }

        if(mysqli_num_rows($result) >= 1)
        {
          $sqlUpdate = "UPDATE taikhoan SET ngayDangNhap = CURRENT_TIMESTAMP WHERE tenTaiKhoan = '".$UserName."' ";
          mysqli_query($conn, $sqlUpdate);
        }
        else
        {
            echo    "<script>
                        alert('Tên tài khoản hoặc mật khẩu không đúng. Xin vui lòng đăng nhập lại!');
                        window.location.href = 'http://localhost/Travel/UIClient/login.php';
                    </script>";
        }

        if (isset($_SESSION['phanQuyen']))
        {
          if ($_SESSION['phanQuyen'] == '2')
          {
            echo    "<script>
                        alert('Chúc mừng Quản trị viên đã đăng nhập  thành công!');
                        window.location.href = 'http://localhost/Travel/UIAdmin/index.php';
                    </script>";
          }
          else
          {
            echo    "<script>
                        alert('Chúc mừng Quý khách đã đăng nhập  thành công!');
                        window.location.href = 'http://localhost/Travel/index.php';
                    </script>";
          }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><b style="font-size:28px; color:white;">ĐĂNG NHẬP</b></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>

                    <form class="myform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i style="font-size:26px"
                                        class="far fa-user fa-lg fa-fw"></i></span>
                            </div>
                            <input type="username" id="email" name="txtUserName" class="form-control rounded-0"
                                placeholder="UserName" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="password" name="txtPassWord" class="form-control rounded-0"
                                minlength="5" placeholder="Password" required autocomplete="off" />
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-check"> <input type="checkbox" class="form-check-input"
                                        id="exampleCheck1"> <label class="form-check-label"
                                        for="exampleCheck1">Remember</label> </div>
                            </div>
                            <div class="col-md-6 col-12 bn">
                                <div class="forgot float-right">
                                    <a href="http://localhost/Travel/UIClient/forgotPassword.php"
                                        id="forgot-link">Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="btnLogin"
                                class="col-md-5 btn btn-success btn-lg active float-right">
                                <i class="far fa-user pr-2"></i>Đăng nhập
                            </button>
                            <a href="http://localhost/Travel/" class="col-md-5 btn btn-danger btn-lg active float-left">
                                <i class="fas fa-reply  pr-2"></i> Thoát
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