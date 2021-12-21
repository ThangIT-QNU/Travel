<?php ob_start(); 
    session_start();
    //
    if (isset($_SESSION['cart'])) {
      $price = 0;
      $total = 0;
    }
    //
    if (isset($_GET['idTour'])) {
      $idTour = $_GET['idTour'];
      unset($_SESSION['cart'][$idTour]);
      header('Location:http://localhost/Travel/UIClient/cart.php');
    }
    if(isset($_GET['delete'])){
      unset($_SESSION['cart']);
      header('location:http://localhost/Travel/UIClient/cart.php');
    }
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Viettravel - Detail Tour</title>
    <link rel="stylesheet" type="text/css" href="../styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="../styles/css/Animation.css">
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/tooltipster/dist/css/tooltipster.bundle.min.css" />
    <script type="text/javascript" src="../styles/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <div id="wrapper">
        <header class="header">
            <div class="top_bar">
                <div class="bar__info">
                    <div class="phone">+84 989 725 994</div>
                    <div class="social">
                        <ul class="social_list">
                            <li class="social_list_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="social_list_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bar__user">
                    <?php
                    if(isset($_SESSION['taiKhoan'])){?>
                    <div class="bar__user-login">
                        <a href="editProfile.php" title="Thông Tin">
                            <i class="fa fa-user"></i><?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng Xuất" href="http://localhost/Travel/UIClient/logout.php">
                            <i class="fas fa-sign-out-alt"></i> Đăng Xuất
                        </a>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="bar__user-login">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/login.php">
                            <i class="fa fa-user"></i>&ensp; Đăng Nhập
                        </a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/register.php">
                            <i class="fa fa-lock"></i>&ensp; Đăng Ký
                        </a>
                    </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div style="font-family: 'Times New Roman', Times, serif;" class="main_nav">
                <div class="main_nav__logo">
                    <a href="http://localhost/Travel/index.php">
                        <img src="../styles/images/logo.png" alt="logo">Viettravel
                    </a>
                </div>
            </div>
        </header>

        <div class="main">
            <!--slider-->
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(../styles/images/Ks20.jpg"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1>Thông tin cá nhân</h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_search">
                <div style="margin-top:10px" class="main_search__tabs">
                    <ul class="search_tabs__list">
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/index.php">
                                <i class="fas fa-indent"></i></i><span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/location.php">
                                <i class="fas fa-umbrella-beach"></i><span>Địa điểm</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/hotel.php">
                                <i class="fas fa-hotel"></i><span>Khách Sạn</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/typeTourDetail.php">
                                <i class="fas fa-align-left"></i><span>Loại Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/tour.php">
                                <i class="fas fa-torii-gate"></i><span>Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/cart.php"><i class="fas fa-cart-arrow-down"></i>
                                <span>Đặt Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/cartHotel.php"><i class="fas fa-cart-plus"></i>
                                <span>Đặt Khách Sạn</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style=" margin: -10px 50px 30px 50px;">
        <form action="" method="post">
            <div class="pt-5" style="color:blue; height: 100px;">
                <center>
                    <h1 style="font-size:30px;"><b>CẬP NHẬT THÔNG TIN CÁ NHÂN:</b></h1>
                </center>
            </div>
            <div class="col-md-12">
                <?php
                    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                    if(isset($_SESSION['idTaikhoan']))
                    $user = $_SESSION['idTaikhoan'];           
                    $sql = "SELECT * FROM taikhoan WHERE idTaiKhoan='$user' ";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($query);
                ?>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Tên tài khoản:</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" value="<?php echo $row['tenTaiKhoan']?>" disabled type="text"
                            class="form-control" name="txtUserName">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Mật khẩu</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" value="<?php echo $row['matKhau'] ?>" required
                            class="form-control" type="text" name="txtPassWord">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Họ và tên:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" value="<?php echo $row['hoVaTen']?>" required type="text"
                            class="form-control" name="txtFullName">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Số điện thoại</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" value="<?php echo $row['sdt'] ?>" required class="form-control"
                            type="text" name="txtPhone">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Email</b></h5>
                        <input style="font-size:21px;" value="<?php echo $row['email'] ?>" class="form-control"
                            name="txtEmail" type="email">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;"> Ngày đăng nhập: </b> <span class="text-danger">
                                *</span></h5>
                        <input type="text" style="font-size:21px;" disabled value="
                                    <?php
                                        $date = date('H:i:s - d-m-Y',strtotime($row['ngayDangNhap']));
                                        echo $date;
                                    ?>" class="form-control">
                        </input>
                    </div>
                    <div style="height: 20px;" class="col-md-12">
                    </div>
                    <div class="col-md-6">
                        <input style="font-size:21px;" class="btn btn-success float-left" style="margin-left:-25px;"
                            type="submit" name="btnUpdate" value="Update">
                    </div>
                    <div class="col-md-6">
                        <a style="font-size:21px;" class="btn btn-danger float-right"
                            href="http://localhost/Travel/index.php">Canel</a>
                    </div>

                </div>
        </form>

        <?php
            if (isset($_POST['btnUpdate'])) {
                $passWord = $_POST['txtPassWord'];
                $fullName = $_POST['txtFullName'];
                $email = $_POST['txtEmail'];
                $phone = $_POST['txtPhone'];
                $sqlUpdate = "UPDATE taikhoan SET matKhau = '$passWord', hoVaTen = '$fullName',
                                    email = '$email', sdt = '$phone' WHERE idTaiKhoan = '$user' ";
                $query = mysqli_query($conn, $sqlUpdate);
                if ($query) {
                        echo    "<script> 
                                    alert('Bạn đã cập nhật thông tin tài khoản thành công!');
                                    location.href = 'http://localhost/Travel/UIClient/editProfile.php';
                                </script>";
                }else{
                    echo    "<script>
                                alert('Cập nhật thất bại');
                                location.href = 'http://localhost/Travel/UIClient/editProfile.php';
                            </script>";
                }
            }
        ?>
    </div><br><br>
    </div>
    <footer class="footer">
        <button onclick="topFunction()" id="back_top" title="Go to top"><i class="fas fa-rocket"></i></button>
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a style="font-family: 'Times New Roman', Times, serif;"
                            href="http://localhost/Travel/index.php">
                            <img src="../styles/images/logo.png" alt="">VietTravel
                        </a>
                    </div>
                </div>
                <p class="footer_about__text" style="font-family: 'Times New Roman', Times, serif;">
                    VietTravel tự hào là một đơn vị tiêu biểu trong lĩnh vực tour du lịch đón nhận giải thưởng uy
                    tín
                    nhất dành cho cộng đồng doanh nghiệp Việt Nam.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">bản tin</div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2021</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Miền Bắc</a></li>
                    <li class="tags_item"><a href="#">Miền Trung</a></li>
                    <li class="tags_item"><a href="#">Miền Nam</a></li>
                    <li class="tags_item"><a href="#">Đà Nẵng</a></li>
                    <li class="tags_item"><a href="#">Quảng Nam</a></li>
                    <li class="tags_item"><a href="#">Huế</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer_title">Liên hệ</div>
                <ul class="contact_list">
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_text">68 Hàm Nghi, Ngô Mây, Quy Nhơn, Bình Định</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-phone-square"></i></div>
                        <div class="contact_text">+84 989 725 994</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact_text">thangitqnu@gmail.com</div>
                    </li>
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-globe-asia"></i></div>
                        <div class="contact_text">www.thangitqnu.tk</div>
                    </li>

                </ul>
            </div>
        </div>
    </footer>
</body>
<script src="../styles/js/main_js.js"></script>
<script>
$(function() {
    $("#tabs").tabs();
});
</script>

</html>