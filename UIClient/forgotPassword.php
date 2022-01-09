<?php 
    ob_start();    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Your Password?</title>
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
                        <div style="text-align:center">
                            <div><b style="font-size:28px; color:white;">Quên mật khẩu?</b></div>
                        </div>
                    </div>
                    <form class="myform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
                        enctype="multipart/form-data">
                        <div id="forgotAlert"></div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg"></i></span>
                            </div>
                            <input type="email" id="email" name="txtEmail" class="form-control rounded-0"
                                placeholder="E-Mail" required />
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" name="btnGuiMa"
                                class="col-md-5 btn btn-success btn-lg active float-right">
                                <i class="far fa-user pr-2"></i>Gửi mã
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

<?php
    if(isset($_POST['btnGuiMa'])) {
        $email = $_POST['txtEmail'];
    }
    else {
        exit();
    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'thangitqnu@gmail.com';                     // SMTP username
        $mail->Password   = 'thangit@123';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('thangitqnu@gmail.com', 'VietTravel');
        $mail->addAddress($email);     // Add a recipient

        $code = substr(str_shuffle('123456789'),0,8);
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'VietTravel';
        $mail->Body    = 'Mã xác nhận tài khoản Travel của bạn là: <strong>'.$code.'</strong> 
        Để đảm bảo an toàn cho tài khoản Travel,Quý khách vui lòng không cung cấp mã này cho người khác.' ;

        include "/xampp/htdocs/Travel/DBConnect/DBConnect.php"; 
        if($conn->connect_error) {
            die('Không thể kết nối tới CSDL.');
        }
        $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
        $verifyQuery = mysqli_query($conn,$sql);
        

        if(mysqli_num_rows($verifyQuery)) 
        {
            $sqlUpdate = "UPDATE taikhoan SET OTP = '$code' WHERE email = '$email'";
            $codeQuery = mysqli_query($conn ,$sqlUpdate);
            $mail->send();
            echo "<script>
                        alert('Mã xác nhận đã gửi đến E-mail của bạn vui lòng xác nhận.');
                        window.location.href='http://localhost/Travel/UIClient/code.php?email=$email';
                </script>";
        }
        else {
            echo "<script>
                    alert('E-mail chưa được đăng ký. Xin vui lòng kiểm tra lại!');
                    window.location.href='http://localhost/Travel/UIClient/forgotPassword.php';
                </script>";
        }
        $conn->close();
    
    } catch (Exception $e) {
        echo "Tin nhắn không gửi được. Mailer Error: {$mail->ErrorInfo}";
    }    
?>