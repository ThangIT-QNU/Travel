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
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="../style/css/bootstrap4/bootstrap.min.css" />
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
                        <a href="editProfile.php" title="Thông Tin Cá Nhân"><i class="fa fa-user"></i>
                            <?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng Xuất" href="http://localhost/Travel/logout.php"> Đăng Xuất</a>
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
                    <div class="home_slide__background" style="background-image: url(../styles/images/26.jpg)"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1>Book Tour</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--        contact-->

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
    </div><br><br>
    <div style=" margin: 0px 50px 30px 50px;">
        <?php 
            if(isset($_SESSION['cart'])){
        ?>
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
                            <td><img style="height:50px; width:50px" src="../styles/images/<?= $value['img'] ?>">
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
                            <a style="font-size:20px; float:right;" class="btn btn-danger" href="cart.php?delete=1">Xóa
                                Tất Cả</a>
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

            <h1><b>Tổng số lượng tour:</b> <span class="badge badge-secondary badge-pill"><?php echo $total ?></span>
            </h1><br>
            <?php }
                } ?>
            <!-- ------------------------------------------------------------------------------------ -->

            <?php
                include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                if(isset($_SESSION['idTaikhoan']))
                $user = $_SESSION['idTaikhoan'];           
                $sql = "SELECT * FROM taikhoan WHERE idTaiKhoan='$user' ";
                $query = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($query);
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="row p-t-20">
                    <div style="font-size:25px;" class="col-md-12">
                        <div>
                            <b>Điền thông tin để book - Lưu ý: những trường có dấu <span class="text-danger">(*) </span>
                                đều bắt buộc phải
                                nhập!!!</b>
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Họ và tên:<span class="text-danger">* </span></b></h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nhập họ và tên của bạn"
                            value="<?=$row['hoVaTen']?>" required type="text" class="form-control" name="txtFullName">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Số điện thoại:<span class="text-danger">* </span></b></h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nhập số điện thoại của bạn"
                            value="<?php echo $row['sdt'] ?>" required class="form-control" type="text" name="txtPhone">
                    </div>
                    <div class="col-md-6">
                        <h5> <b style="font-size:21px;">Email:<span class="text-danger">* </span></b></h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nhập email của bạn ..."
                            value="<?php echo $row['email'] ?>" class="form-control" name="txtEmail" type="email">
                    </div>
                    <div class="col-md-6">
                        <h5><b style="font-size:21px;">Ghi chú:</b></h5>
                        <input style="font-size:21px;" name="txtNotes" rows="1" class="form-control"
                            placeholder="Nhập ghi chú ...">
                        </input> <br>
                    </div>
                    <div class="col-md-6">
                        <a style="font-size:21px;" class="btn btn-info float-left"
                            href="http://localhost/Travel/UIClient/hotel.php">Tiếp Tục Book Tour</a>
                    </div>
                    <div class="col-md-6">
                        <button style="font-size:21px;" class="btn btn-success float-right" style="margin-left:-25px;"
                            type="submit" name="btnOder">Xác Nhận Thanh Toán</button>
                    </div>
            </form>
            <?php
        }   //end if
        if(!isset($_SESSION['cart'])){
        ?>
            <div class="pt-5" style="margin-top:50px; color:red; height: 300px;">
                <center>
                    <h1 style="font-size:30px;"><b>Giỏ hàng của bạn trống!</b></h1>
                    <b style="font-size:25px;">Vui lòng thêm tour vào giỏ hàng.</b>
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

</html>
<?php ob_end_flush(); ?>

<?php 
    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_POST['btnOder'])){
        //Lấy thông tin khách hàng từ form
        $fullName = $_POST['txtFullName'];
        $phone = $_POST['txtPhone'];
        if(isset($_POST['txtEmail'])){
            $email = $_POST['txtEmail'];
        }else{
            $email = '';
        }
        if(isset($_POST['txtNotes'])){
            $notes = $_POST['txtNotes'];
        }else{
            $notes = '';
        }
        
        $idKhachHang = $_SESSION['idTaiKhoan'];
        // print_r( $_SESSION);
        // print_r( $_POST);
        $sqlInsert = " INSERT INTO oder(idKhachHang, tongTien, tenKhachHang, email, sdt, ghiChu, trangThai) 
                        VALUES ('$idKhachHang','$sum','$fullName','$email','$phone', '$notes','0')";
        $query = mysqli_query($conn, $sqlInsert);
        $idOder = mysqli_insert_id($conn);
        // print_r( $sqlInsert);
        foreach($_SESSION['cart'] as $key => $value)
        {
            $sqlOder = "INSERT INTO chitietoder(idOder, idTour,hinhAnh, giaTien, soLuong, tongTien) 
                        VALUES ('$idOder', '$key', '".$value['img']."', '".$value['cost']."', '".$value['count']."', '".$value['cost']*$value['count']."' )";
            $queryOder = mysqli_query($conn,$sqlOder);
            // print_r($sqlOder);
            // die();
            if ($queryOder){
                unset($_SESSION['cart']);
                echo    "<script> 
                        alert('Chúc mừng Quý khách đã thanh toán thành công! Chúng tôi sẽ liên hệ cho bạn trong thời gian sớm nhất.');
                        location.href = 'http://localhost/Travel/UIClient/cart.php';
                    </script>";
                }
            else
                echo    "<script> 
                            alert('Thanh toán không thành công!');location.href = 'http://localhost/Travel/UIClient/cart.php';
                        </script>";
                        
                
    }
}


?>