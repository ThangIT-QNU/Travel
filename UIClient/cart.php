<?php ob_start(); 
    session_start();
    //
    if(!isset($_SESSION['taiKhoan'])) 
    {  
        echo "<script> 
                alert('Vui lòng đăng nhập hệ thống để book tour!');location.href = 'http://localhost/Travel/UIClient/login.php';
            </script>";
        exit;
    }
    
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
    <link rel="stylesheet" href="public/css/styles.css">
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
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->
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
                        <a href="profile.php" title="Thông Tin"><i class="fa fa-user"></i>
                            <?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng Xuất" href="http://localhost/Travel/UIClient/logout.php"> Đăng Xuất</a>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="bar__user-login">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/login.php"><i
                                class="fa fa-user"></i>&ensp; Đăng Nhập</a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng nhập" href="http://localhost/Travel/UIClient/register.php"><i
                                class="fa fa-lock"></i>&ensp; Đăng Ký</a>
                    </div>
                    <?php
                    } ?>
                </div>
            </div>

            <div class="main_nav">
                <div class="main_nav__logo">
                    <a href="http://localhost/Travel/index.php">
                        <img src="../styles/images/logo.png" alt="logo">Viettravel
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(../styles/images/32.jpg)"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1>Book Tour</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--        contact-->
        </div>
    </div><br><br>
    <div style=" margin: -10px 50px 30px 50px;">
        <?php 
            if(isset($_SESSION['cart'])){
        ?>
        <form action="cart.php?action=submit" method="get">
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <center>
                        <thead>
                            <tr style="font-size:21px;" class="bg-primary">
                                <th class="text-center">Hình Ảnh</th>
                                <th class="text-center">Tên Tour</th>
                                <th class="text-center">Ngày Khởi Hành</th>
                                <th class="text-center">Giá Tiền</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Thành Tiền</th>
                                <th class="text-center">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sum = 0;
                            if (isset($_SESSION['cart'])) 
                            {
                              foreach ($_SESSION['cart'] as $key => $value) 
                              {
                                  $total += $value['count'];
                                  $price = $value['count'] * $value['cost'];
                                  $sum = $sum += $price;
                              ?>
                            <tr style="font-size:21px;">
                                <td><img style="height:50px" width="50" ; src="../styles/images/<?= $row['img'] ?>">
                                </td>
                                <td><?php echo $value['name'] ?></td>
                                <td>
                                    <?php
                                        $date = date('d-m-Y',strtotime($value['date']));
                                        echo $date;
                                    ?></td>
                                <td><?php echo number_format($value['cost']) ?> VNĐ</td>
                                <td><?php echo $value['count'] ?></td>
                                <td><?php echo number_format($price) ?> VNĐ</td>
                                <td><a style="color:red" href="cart.php?idTour=<?php echo $key ?>"><i
                                            class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            <?php }
                              $_SESSION['number'] = $total;
                            } ?>
                        </tbody>
                        <div class="cart-top ">
                            <h4> <b style="font-size:25px;">Tổng Tiền:</b>
                                <span style="color:red"> <b style="font-size:25px;"><?php echo number_format($sum)?> VNĐ
                                    </b></span>
                                <a style="font-size:20px; float:right;" class="btn btn-danger"
                                    href="cart.php?delete=1">Xóa Tất Cả</a>
                            </h4><br>
                        </div>
                    </center>
                </table>
                <?php
                        if (isset($_SESSION['cart'])) {
                            if ($total == 0) {
                            unset($_SESSION['cart']);
                            } else {
                        ?>
                <h1>
                    Tổng số lượng tour:<?php echo $total ?>
                </h1>
                <?php }
                        } ?>
                <!-- ------------------------------------------------------------------------------------ -->
                <?php 
                include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                if(isset($_SESSION['idTaiKhoan']))
                $user = $_SESSION['idTaiKhoan'];           
                $sql = "SELECT * FROM taikhoan WHERE idTaiKhoan='$user' ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
                ?>
                <div class="row p-t-20">
                    <div style="font-size:25px;" class="col-md-12">
                        <div>
                            <b> Lưu ý: những trường có dấu <span class="text-danger">(*) </span> đều bắt buộc phải
                                nhập!!!</b>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Họ và tên:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" value="<?php echo $row['hoVaTen']?>" required type="text"
                            class="form-control" name="txtFullName">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Số điện thoại</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" value="<?php echo $row['sdt'] ?>" required class="form-control"
                            type="text" name="txtPhone">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Email</b></h5>
                        <input style="font-size:21px;" value="<?php echo $row['email'] ?>" class="form-control"
                            name="txtEmail" type="email">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;"> Địa chỉ: </b> <span class="text-danger"> *</span></h5>
                        <input type="text" style="font-size:21px;" required name="txtAddress"
                            value="<?php echo $row['hoVaTen'] ?>" class="form-control"
                            placeholder="Vui lòng nhập chính xác địa chỉ để giao hàng ...">

                        </input>
                    </div>
                    <div class="col-md-12">
                        <h5><b style="font-size:21px;">Ghi chú:</b></h5>
                        <input style="font-size:25px;" name="txtNotes" rows="1" class="form-control"
                            placeholder="Nhập ghi chú ...">
                        </input> <br>
                    </div>
                    <div class="col-md-6">
                        <a style="font-size:21px;" class="btn btn-info float-left"
                            href="http://localhost/Travel/UIClient/tour.php">Tiếp Tục Mua Hàng</a>
                    </div>
                    <div class="col-md-6">
                        <input style="font-size:21px;" class="btn btn-success float-right" style="margin-left:-25px;"
                            type="submit" name="btnThanhToan" value="Xác Nhận Thanh Toán"></input>
                    </div>
        </form>
        <?php
        }   //end if
        if(!isset($_SESSION['cart'])){
        ?>
        <div class="pt-5" style="margin-top:50px; color:red; height: 300px;">
            <center>
                <h1 style="font-size:30px;"><b>Giỏ hàng của bạn trống!</b></h1>
                <b style="font-size:25px;">Vui lòng thêm tour and khách sạn vào giỏ hàng.</b>
            </center>
        </div>
        <?php
        }
        ?>
    </div>
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
                            <img src="styles/images/logo.png" alt="">VietTravel
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
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2021</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">Địa điểm du lịch Hè 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
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