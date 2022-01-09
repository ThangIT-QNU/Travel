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
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script type="text/javascript" src="../styles/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
                            <h1> thông tin chi tiết khách sạn</h1>
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
                                    <div style=" margin-left:50px; font-size:17px;">Khách Sạn</div>
                                    <input type="text" name="keySearch"
                                        style=" font-family: 'Times New Roman'; font-size:18px; margin-left:50px; width: 920px;"
                                        class="search_content__input"
                                        placeholder="Nhập vào tên khách Sạn hoặc tên địa điểm khách sạn mà bạn muốn tìm kiếm">
                                </div>
                                <button name="btnSearch" style="font-family: 'Times New Roman'; margin-right: 25px;"
                                    class="button search_content__button">Tìm kiếm
                                    <span></span><span></span><span></span>
                                </button>
                            </form>
                            <?php
                                if (isset($_GET['btnSearch'])) {
                                    $keySearch = $_GET['keySearch'];
                                    header("Location:http://localhost/Travel/UIClient/searchHotel.php?key=$keySearch");
                                }
                            ?>
                        </div>
                        <div style="margin-top:0px;" class="tabs_content animated fadeIn">
                            <div style=" margin-top:5px;" class="search_content__item">
                                <form action="http://localhost/Travel/UIClient/hotelPrice.php" method="post"
                                    class="search_content">
                                    <div class="search_content__item" style="margin-left: 50px;">

                                        <select name="txtPrice" style="
                                            width: 150px;
                                            height: 46px;
                                            border: none;
                                            font-weight: 600;
                                            color: #929191;
                                            font-family: 'Times New Roman';font-size:18px;">
                                            <?php
                                            include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                            $sql = "SELECT DISTINCT giaPhongKS FROM khachsan ";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $row['giaPhongKS'] ?>">
                                                <?= number_format($row['giaPhongKS']) ?> VNĐ</option>
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
                    if (isset($_GET['idKhachSan']))
                    $idKhachSan = $_GET['idKhachSan'];
                    $sql = "SELECT * FROM khachsan,diadiem WHERE khachsan.idDiaDiem = diadiem.idDiaDiem 
                                        AND idKhachSan = '$idKhachSan' ";
                    $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="about__image"><img style="width:700px; height:500px; margin-left:-50px "
                            src="../styles/images/<?=$row['hinhAnhKS']?>" alt=""></div>
                    <div style="color:rgb(0,0,0);" class="about__content">
                        <b class="about__title">
                            <h3><b><?= $row['tenKhachSan']?></b></h3>
                        </b>


                        <b> Mã khách sạn:&ensp;<?= $row['idKhachSan']?></b> <br></br>
                        <b> Số lượng người ở:&ensp;<?= $row['soLuongNguoi']?> Người</b> <br></br>
                        <b> Ngày nhận phòng:&ensp;
                            <?php
                            $date = date('d/m/Y',strtotime($row['ngayNhanPhong']));
                            echo $date;
                            ?>
                        </b> <br></br>
                        <b> Ngày trả phòng:&ensp;
                            <?php
                            $date = date('d/m/Y',strtotime($row['ngayTraPhong']));
                            echo $date;
                            ?>
                        </b> <br></br>
                        <b> Địa điểm:&ensp;<?= $row['tenDiaDiem']?></b> <br></br>
                        <b> Giá tour:&ensp;<?= number_format($row['giaPhongKS'])?>&ensp;VNĐ </b>
                        <p class="about__text"></p>
                        <div style="margin-top:-5px;" class="button button_about">
                            <div class="button_bcg"></div>
                            <a
                                href="http://localhost/Travel/UIClient/addCartHotel.php?idKhachSan=<?= $row['idKhachSan'] ?>">
                                BOOK<span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box blog__box">
                    <div class="blog_post_text">
                        <p><?=$row['noiDungKS']?></p><br>
                        <p> <b style="color:black">Vị trí bảng đồ:</b> </p>
                        <iframe src="<?php echo $row['banDo'] ?>" width="100%" height="350px" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
                <?php } ?>
            </div>

            <!-- Comment -->
            <div style="margin-top:0px; margin-left:350px" class="wrap float-right">
                <div class="row p-t-20">
                    <div class="col-md-12"><br><b>Các bài đánh giá gần đây:</b>
                        <?php
                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        $soDongHT = 3;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $pageTT = ($page - 1) * $soDongHT;
                        $allDong = mysqli_query($conn, "SELECT * FROM danhgia WHERE trangThai='1' AND idKhachSan = '$idKhachSan'")->num_rows;
                        $allPage = ceil($allDong / $soDongHT);
                        $sql = "SELECT * FROM danhgia WHERE trangThai='1' AND  idKhachSan = '$idKhachSan' LIMIT $soDongHT OFFSET $pageTT";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="d-flex align-items-center">

                            <div class="col-1">
                                <i style="color: #FF5622; margin: 10px 1000px 0px 0px" class="fas fa-user fa-8x"></i>
                            </div> &ensp;&ensp;

                            <div class="col-10">
                                <div id="resultVote-<?= $row['idDanhGia']?>" value="<?= $row['sao'] ?>"></div>
                                <b>" <i><?php echo $row['tieuDe']?> </i> "</b> - <?php echo $row['noiDung']?><br>
                                <b>Đi cùng:</b> <?php echo $row['diVoiAi']?> - <?php echo $row['ngayDi']?> <br>
                                <span style="color: #FF5622;"><b><?php echo $row['hoVaTen']?></b></span> - Đánh giá vào:
                                <?php
                                    $date = date('d/m/Y - H:i:s',strtotime($row['ngayDanhGia']));
                                    echo $date;
                                ?>
                            </div>
                        </div>
                        <?php }  ?>
                    </div>
                    <div style="margin-top:30px;" class="col-md-12">
                        <ul>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $idKhachSan?>page=1">Trang
                                    đầu</a>
                            </li>
                            <?php
                                for ($num = 1; $num <= $allPage; $num++) {
                                    if ($num != $page) {
                                        if ($num > $page - 2 && $num < $page + 2) {
                                ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $idKhachSan?>&page=<?= $num ?>"><?= $num ?>
                                </a>
                            </li>
                            <?php
                                }
                            } else {
                                ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $idKhachSan?>&page<?= $num ?>"><?= $num ?>
                                </a>
                            </li>
                            <?php }
                                } ?>
                            <li class="blog_dot active">
                                <a class="page-link"
                                    href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $idKhachSan?>&page=<?= $allPage ?>">Trang
                                    cuối
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Comment -->
    <div style=" margin: -10px 50px 30px 50px;">
        <form id="formSubmit" action="" method="post">
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
                    <div class="col-md-3">
                        <h5> <b style="font-size:21px;">Xếp hạng tổng thể:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div id="voteA" href="#vote1"></div>
                        <input type="hidden" name="rating" id="vote1" value="1">
                    </div>

                    <div class="col-md-3">
                        <h5>
                            <b style="font-size:21px;">Dịch vụ:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div id="voteB" href="#vote2"></div>
                        <input type="hidden" name="rating1" id="vote2" value="1">
                    </div>

                    <div class="col-md-3">
                        <h5>
                            <b style="font-size:21px;">Giấc ngủ:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div id="voteC" href="#vote3"></div>
                        <input type="hidden" name="rating2" id="vote3" value="1">
                    </div>

                    <div class="col-md-3">
                        <h5>
                            <b style="font-size:21px;">Địa điểm:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div id="voteD" href="#vote4"></div>
                        <input type="hidden" name="rating3" id="vote4" value="1">
                    </div>

                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">E-mail:</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" type="email" class="form-control"
                            placeholder="Vui lòng nhập email" required name="txtEmail">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Chủ đề:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" maxlength="50"
                            placeholder="Vui lòng nhập chủ đề không quá 50 kí tự" required class="form-control"
                            type="text" name="txtTitle">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Nội dung đánh giá:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" placeholder="Vui lòng nội dung đánh giá " required type="text"
                            class="form-control" name="txtInformation">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Bạn đi du lịch khi nào?</b> <span class="text-danger"> *</span>
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
                        <h5> <b style="font-size:21px;">Loại chuyến đi đó là gì?</b><span class="text-danger">
                                *</span></h5>
                        <select style="font-size:21px; height:41px;" name="txtPeople" class="form-control">
                            <option value="Danh nghiệp">Danh nghiệp</option>
                            <option value="Cặp đôi">Cặp đôi</option>
                            <option value="Bạn bè">Bạn bè</option>
                            <option value="Gia đình">Gia đình</option>
                            <option value="Một mình">Một mình</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Mức giá của khách sạn này thế nào?</b><span class="text-danger">
                                *</span></h5>
                        <select style="font-size:21px; height:41px;" name="txtPrice" class="form-control">
                            <option value="Bình dân">Bình dân</option>
                            <option value="Hạng trung">Hạng trung</option>
                            <option value="Sang trọng">Sang trọng</option>
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
                // echo "<script> 
                //         alert('Vui lòng đăng nhập để book tour!');
                //         location.href = 'http://localhost/Travel/UIClient/login.php';
                //         </script>";
                if (isset($_SESSION['taiKhoan'])) {
                    $txtFullName =  $_SESSION['taiKhoan'];
                } else {
                    $txtFullName = "Khách";
                }
                $txtEmail = $_POST['txtEmail'];
                $txtTitle = $_POST['txtTitle'];
                $txtInformation = $_POST['txtInformation'];
                $txtRating = $_POST['rating'];
                $txtService = $_POST['rating1'];
                $txtSleep = $_POST['rating2'];
                $txtLocation = $_POST['rating3'];
                $txtDate = $_POST['txtDate'];
                $txtPeople = $_POST['txtPeople'];
                $txtPrice = $_POST['txtPrice'];
                //Tính số sao trung Bình đánh giá 1ng
                // $array = array($txtRating , $txtService , $txtSleep , $txtLocation);
                // $average = ceil(array_sum($array) / count($array));

                //Tính tổng của khách Sạn
                // $totalHotelStar = mysqli_query($conn,"SELECT SUM(tbSao) FROM danhgia WHERE idKhachSan = '$idKhachSan'");
                // $row1 = mysqli_fetch_row($totalHotelStar);
                // $base_pay = $row1[0];
                // $totalRatingNumber = mysqli_query($conn,"SELECT COUNT(idDanhGia) FROM danhgia WHERE idKhachSan='$idKhachSan'");
                

                // $totalRatingHotel = mysqli_fetch_row(int($totalHotelStar / $totalRatingNumber));
                // $base_pay1 = $totalRatingHotel[0] ;

                //
                // $sqlAverage = mysqli_query($conn,"SELECT AVG(tbSao) FROM danhgia WHERE idKhachSan = '$idKhachSan'");
                // $row = mysqli_fetch_row($totalHotelStar);
                // $base_pay = $row[0];
                // $A = (int)$sqlAverage;
                


                    $sqlInsert = "INSERT INTO danhgia(hoVaTen, email, tieuDe, noiDung, sao, dichVu, giacNgu, diaDiem, ngayDi, diVoiAi, mucGiaKS, trangThai, idKhachSan) 
                            VALUES('$txtFullName', '$txtEmail', '$txtTitle', '$txtInformation', '$txtRating', '$txtService', '$txtSleep', '$txtLocation', '$txtDate', '$txtPeople','$txtPrice','0', '$idKhachSan')";
                    // var_dump($sqlAverage);
                    // echo "$base_pay";
                    
                    // exit();
                    $sqlInsert = mysqli_query($conn, $sqlInsert);
                    if ($sqlInsert){
                        
                        
                        echo    "<script>alert('Chúc mừng bạn đã đánh giá khách sạn thành công!');
                                    header('Location:http://localhost/Travel/UIClient/hotelDetail.php');
                                </script>";
                }
                else
                    echo    "<script>
                                alert('Đánh giá thất bại!');
                            </script>";
                }
        ?>
    </div>
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
    $("#tabs").tabs();
});
</script>

</html>