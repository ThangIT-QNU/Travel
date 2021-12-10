<?php 
    ob_start();
    session_start();

    ////////////////////////////////
    include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
    if(isset($_POST['btnRegister']))
    {
        $userName = $_POST['txtUserName'];
        $passWord = $_POST['txtPassWord'];
        $rePassWord = $_POST['txtRePassWord'];
        $fullName = $_POST['txtFullName'];
        $email = $_POST['txtEmail'];

        $sql = "SELECT * FROM taikhoan where tenTaiKhoan='".$userName."'"; 
        $result = mysqli_query($conn,$sql); 
        if($passWord == $rePassWord)
        {
            if(mysqli_num_rows($result) >=1 ){
                echo    "<script> 
                            alert('Tên tài khoản tồn tại, xin vui lòng chọn tên khác!');
                                    location.href = 'http://localhost/Travel/UIClient/register.php';
                        </script>";
            }
            else{                                     
                $sqlInSert = "INSERT INTO taikhoan(tenTaiKhoan, matKhau, hoVaTen, phanQuyen, email) 
                            values('".$userName."','".$passWord."','".$fullName."','1','".$email."')";
                $result =  mysqli_query($conn,$sqlInSert);  
            echo    "<script> 
                        alert('Chúc mừng bạn đã đăng ký thành công! Xin mời bạn đăng nhập.');
                        location.href = 'http://localhost/Travel/UIClient/login.php';
                    </script>";
            }
    }
    else echo " Mật Khẩu Không Trùng Khớp.";
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
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
                <div class="card py-3 px-5">
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div></div>
                            </div>
                            <div class="col-6">
                                <b style="font-size:24px; color:white;">ĐĂNG KÝ</b>
                            </div>
                            <div class="col-3">
                                <div></div>
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
                            <input type="text" name="txtUserName" class="form-control rounded-0"
                                placeholder="Tên tài khoản" required />
                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" name="txtPassWord" class="form-control rounded-0" minlength="5"
                                placeholder="Mật khẩu" required />
                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" name="txtRePassWord" class="form-control rounded-0" minlength="5"
                                placeholder="Nhập lại mật khẩu" required />
                        </div>

                        <div class="form-group">
                            <div id="passError" class="text-danger font-weight-bolder"> </div>
                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i style="font-size:28px"
                                        class="fas fa-user-edit"></></i></span>
                            </div>
                            <input type="text" id="name" name="txtFullName" class="form-control rounded-0"
                                placeholder="Họ và Tên" required />
                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i
                                        class="far fa-envelope fa-lg fa-fw"></i></span>
                            </div>
                            <input type="email" name="txtEmail" class="form-control rounded-0" placeholder="E-Mail"
                                required />
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" name="btnRegister"
                                class="col-md-5 btn btn-success btn-lg active float-right">
                                <i class="far fa-user pr-2"></i>Đăng ký
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