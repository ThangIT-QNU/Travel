<?php 
    ob_start(); 
    session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Viettravel - Detail Tour</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="../styles/css/Animation.css">
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script type="text/javascript" src="../styles/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>

    </style>
    <script>
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
            $(document).ready(function() {
                $(".top_bar").hide();
            });

        } else {
            $(document).ready(function() {
                $(".top_bar").show();
            });
        }
    }

    $(document).ready(function() {
        $('.bar_1').animate({
            width: "70%"
        });
        $('.bar_2').animate({
            width: "40%"
        });
        $('.bar_3').animate({
            width: "43%"
        });
        $('.bar_4').animate({
            width: "65%"
        });
    });
    $(document).ready(function() {
        $('.tooltip').tooltipster();
    });
    </script>
    <style>
    </style>
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
            <!--slider-->
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(../styles/images/12.jpg)"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1> thông tin chi tiết tour</h1>
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

                    <div id="tabs" class="main_search__tabs">
                        <div style="margin-top:40px;" id="tabs-2" class="tabs_content animated fadeIn">
                            <form action="" method="get" class="search_content">
                                <div class="search_content__item">
                                    <div style=" margin-left:50px; font-size:17px;">Tour</div>
                                    <input type="text" name="keySearch"
                                        style=" font-family: 'Times New Roman'; font-size:18px; margin-left:50px; width: 920px;"
                                        class="search_content__input"
                                        placeholder="Nhập vào tên tuor hoặc tên địa điểm tour du lịch bạn muốn tìm kiếm">
                                </div>
                                <button name="btnSearch" style="font-family: 'Times New Roman';margin-right:30px;"
                                    class="button search_content__button">Tìm kiếm
                                    <span></span><span></span><span></span>
                                </button>
                            </form>
                            <?php
                                if (isset($_GET['btnSearch'])) {
                                    $keySearch = $_GET['keySearch'];
                                    if (isset($_GET['key']))
                                        $keySearch = $_GET['key'];
                                        if ($keySearch == "") {
                                            echo    "<script> 
                                                        alert('Vui lòng nhập tên tour or địa điểm tour để tìm kiếm!');location.href = 'http://localhost/Travel/UIClient/tour.php';
                                                    </script>";
                                        } 
                                    else{
                                        header("Location:http://localhost/Travel/UIClient/searchTour.php?key=$keySearch");
                                    }
                                }
                            ?>
                        </div>
                        <div style="margin-top:0px;" class="tabs_content animated fadeIn">
                            <div style=" margin-top:5px;" class="search_content__item">
                                <form action="http://localhost/Travel/UIClient/tourPrice.php" method="post"
                                    class="search_content">
                                    <div class="search_content__item" style="margin-left: 50px;">

                                        <select name="txtPrice" style="
                                            width: 150px;
                                            height: 46px;
                                            outline: none;
                                            font-weight: 600;
                                            color: #929191;
                                            font-family: 'Times New Roman';
                                            border: none;-size:18px;">
                                            <?php
                                            include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                            $sql = "SELECT DISTINCT giaTour FROM tour ";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $row['giaTour'] ?>">
                                                <?= number_format($row['giaTour']) ?> VNĐ</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit"
                                        style="font-family: 'Times New Roman'; margin-left: 100px; margin-top:-36px"
                                        class="button search_content__button">Lọc
                                        <span></span><span></span><span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--        About us-->

            <div style="font-size:20px; margin-top:-10px; " class="about">
                <div class="box about__box">
                    <?php
                    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                    if (isset($_GET['idTour']))
                    $idTour = $_GET['idTour'];
                    $sql = "SELECT * FROM tour,loaitour,diadiem WHERE tour.idLoaiTour = loaitour.idLoaiTour 
                            AND tour.idDiaDiem = diadiem.idDiaDiem AND idTour = '$idTour' ";
                    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="about__image"><img style="width:700px; height:450px "
                            src="../styles/images/<?=$row['hinhAnhTour']?>" alt="">
                    </div>
                    <div style="color:rgb(0,0,0);" class="about__content">
                        <b class="about__title">
                            <h3><b><?= $row['tenTour']?></b></h3>
                        </b> <br>
                        <b> Mã tour:&ensp;<?= $row['idTour']?></b> <br></br>
                        <b> Số lượng:&ensp;<?= $row['soLuongNguoi']?> Người</b> <br></br>
                        <b> Ngày khởi hành:&ensp;
                            <?php
                            $date = date('d-m-Y',strtotime($row['ngayKhoiHanhTour']));
                            echo $date;
                            ?>
                        </b> <br></br>
                        <b> Xuất phát:&ensp;<?= $row['noiKhoiHanhTour']?></b> <br></br>
                        <b> Giá tour:&ensp;<?= number_format($row['giaTour'])?>&ensp;VNĐ </b>
                        <p class="about__text"></p>
                        <div style="margin-top:-5px;" class="button button_about">
                            <div class="button_bcg"></div>
                            <a href="http://localhost/Travel/UIClient/addCart.php?idTour=<?= $row['idTour'] ?>">
                                BOOK<span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box blog__box">
                    <div class="blog_post_text">
                        <p><?=$row['thongTinTour']?></p><br>
                        <p> <b style="color:black">Vị trí bảng đồ:</b> </p>
                        <iframe src="<?php echo $row['banDo'] ?>" width="100%" height="350px" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div style="margin-top:0px; margin-left:340px" class="wrap float-right">
                <div class="row p-t-20">
                    <div class="col-md-12"><br><b>Các bài đánh giá gần đây:</b>
                        <?php
                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        $soDongHT = 3;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $pageTT = ($page - 1) * $soDongHT;
                        $allDong = mysqli_query($conn, "SELECT * FROM danhgia WHERE trangThai='1' AND idTour = '$idTour'")->num_rows;
                        $allPage = ceil($allDong / $soDongHT);
                        $sql = "SELECT * FROM danhgia WHERE trangThai='1' AND  idTour = '$idTour' LIMIT $soDongHT OFFSET $pageTT";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="d-flex align-items-center">
                            <div class="col-1">
                                <i style="color: #FF5622; margin: 10px 1000px 0px 0px" class="fas fa-user fa-8x"></i>
                            </div> &ensp;&ensp;

                            <div class="col-10">
                                <div id="resultVote-<?= $row['idDanhGia']?>" value="<?= $row['sao'] ?>"></div>
                                <b>"<i><?php echo $row['tieuDe']?></i>"</b> -<?php echo $row['noiDung']?><br>
                                <b>Đi cùng:</b> <?php echo $row['diVoiAi']?> - <?php echo $row['ngayDi']?> <br>

                                <span style="color: #FF5622;"><b><?php echo $row['hoVaTen']?></b></span> - Đánh giá
                                vào:
                                <?php
                                    $date = date('d/m/Y - H:i:s',strtotime($row['ngayDanhGia']));
                                    echo $date;
                                ?>
                            </div>
                        </div>
                        <?php }  ?>
                    </div>
                    <div style="margin-top:30px;" class=" d-flex col-md-12">
                        <ul>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $idTour?>page=1">Trang
                                    đầu</a>
                            </li>
                            <?php
                                for ($num = 1; $num <= $allPage; $num++) {
                                    if ($num != $page) {
                                        if ($num > $page - 2 && $num < $page + 2) {
                                ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $idTour?>&page=<?= $num ?>"><?= $num ?>
                                </a>
                            </li>
                            <?php
                                }
                            } else {
                                ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $idTour?>&page<?= $num ?>"><?= $num ?>
                                </a>
                            </li>
                            <?php }
                                } ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $idTour?>&page=<?= $allPage ?>">Trang
                                    cuối
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=" margin: -10px 50px 30px 50px;">
        <form action="" method="post">
            <div class="pt-5" style="color:blue; height: 100px;">
                <center>
                    <h1 style="font-size:30px;"><b>FORM ĐÁNH GIÁ:</b></h1>
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
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Xếp hạng:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div id="voteA" href="#vote1"></div>
                        <input type="hidden" name="rating" id="vote1" value="1">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">E-mail:</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" type="email" class="form-control"
                            placeholder="Vui lòng nhập email" required name="txtEmail">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Chủ đề:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nhập chủ đề" required class="form-control"
                            type="text" name="txtTitle">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Nội dung đánh giá:</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nội dung đánh giá" required type="text"
                            class="form-control" name="txtInformation">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Bạn đi khi nào?</b> <span class="text-danger"> *</span>
                        </h5>
                        <select style="font-size:21px; height:41px;" name="txtDate" class="form-control">
                            <option value="Tháng 01 Năm 2021">Tháng 01 Năm 2021</option>
                            <option value="Tháng 02 Năm 2021">Tháng 02 Năm 2021</option>
                            <option value="Tháng 03 Năm 2021">Tháng 03 Năm 2021</option>
                            <option value="Tháng 04 Năm 2021">Tháng 04 Năm 2021</option>
                            <option value="Tháng 05 Năm 2021">Tháng 05 Năm 2021</option>
                            <option value="Tháng 06 Năm 2021">Tháng 06 Năm 2021</option>
                            <option value="Tháng 07 Năm 2021">Tháng 07 Năm 2021</option>
                            <option value="Tháng 08 Năm 2021">Tháng 08 Năm 2021</option>
                            <option value="Tháng 09 Năm 2021">Tháng 09 Năm 2021</option>
                            <option value="Tháng 10 Năm 2021">Tháng 10 Năm 2021</option>
                            <option value="Tháng 11 Năm 2021">Tháng 11 Năm 2021</option>
                            <option value="Tháng 12 Năm 2021">Tháng 12 Năm 2021</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Bạn đi cùng ai:</b><span class="text-danger"> *</span></h5>
                        <select style="font-size:21px; height:41px;" name="txtPeople" class="form-control">
                            <option value="Một mình">Một mình</option>
                            <option value="Bạn bè">Bạn bè</option>
                            <option value="Cặp đôi">Cặp đôi</option>
                            <option value="Gia đình (trẻ nhỏ)">Gia đình (trẻ nhỏ)</option>
                            <option value="Gia đình (thanh thiếu niên)">Gia đình (thanh thiếu niên)</option>
                            <option value="Danh nghiệp">Danh nghiệp</option>
                        </select>
                    </div>
                    <div style="height: 30px;" class="col-md-12">
                    </div>
                    <div class="col-md-12">
                        <input style="font-size:21px; " class="btn btn-success mx-auto d-block" type="submit"
                            name="btnSend" value="Đánh giá">
                    </div>

                </div>
        </form>
        <?php
            include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
            if (isset($_POST['btnSend'])) {
                // if(!isset($_SESSION['taiKhoan'])) 
                //     echo "<script> 
                //             alert('Vui lòng đăng nhập đánh giá!');
                //             location.href = 'http://localhost/Travel/UIClient/login.php';
                //             </script>";
                if (isset($_SESSION['taiKhoan'])) {
                    $txtFullName =  $_SESSION['taiKhoan'];
                } else {
                    $txtFullName = "Khách";
                }
                $txtEmail = $_POST['txtEmail'];
                $txtTitle = $_POST['txtTitle'];
                $txtInformation = $_POST['txtInformation'];
                $txtRating = $_POST['rating'];
                $txtDate = $_POST['txtDate'];
                $txtPeople = $_POST['txtPeople'];
                //
                $sql = "INSERT INTO danhgia(hoVaTen, email, tieuDe, noiDung, sao, ngayDi, diVoiAi, trangThai, idTour) 
                        VALUES('$txtFullName', '$txtEmail', '$txtTitle', '$txtInformation', '$txtRating', '$txtDate', '$txtPeople', '0', '$idTour')";
                $query = mysqli_query($conn, $sql);
                if ($query)
                    echo    "<script>alert('Chúc mừng bạn đã đánh giá thành công!');
                                header('Location:http://localhost/Travel/UIClient/tourDetail.php');
                            </script>";
                else
                    echo    "<script>
                                alert('Đánh giá thất bại!');
                            </script>";
            }
        ?>
    </div>
    </div><br><br>

    <footer class="footer">
        <button onclick="topFunction()" id="back_top" title="Go to top"><i class="fas fa-rocket"></i></button>
        <div class="box footer__box">
            <div class="footer__about">
                <div class="footer__logo">
                    <div class="logo">
                        <a style="font-family: 'Times New Roman';" href="#">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="../styles/js/main_js.js"></script>
<script type="text/javascript" src="../public/js/vote.js"></script>
<script>
$(function() {

    // var rated = $(".rated").val()
    // $("#rateYo").rateYo({
    //     rating: 3,
    //     fullStar: true,
    //     spacing: "20px"
    // });

    // $("#rateYo").rateYo().on("rateyo.set", function(e, data) {
    //     var rating = data.rating;
    //     $(".result").text("Rating: " + rating)
    //     $("#result").val(rating)
    // })
    // //



    var x = document.querySelectorAll('button[id^="rateYoo"]')
    x.forEach(item => {
        item.style.cssText = `
                background-color: Transparent;
                background-repeat:no-repeat;
                border: none;
                overflow: hidden;
                `

        var id = "#" + item.id;

        var value = item.getAttribute("value")


        $(id).rateYo({
            rating: value,
            fullStar: true,
            spacing: "20px"
        });

    })
});
</script>

<script>
$(function() {
    $("#tabs").tabs();
});
</script>

</html>