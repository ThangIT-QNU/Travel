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
                        <a href="profile.php" title="Th??ng Tin"><i class="fa fa-user"></i>
                            <?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="????ng Xu???t" href="http://localhost/Travel/UIClient/logout.php"> ????ng Xu???t</a>
                    </div>
                    <?php
                    }else{
                        ?>
                    <div class="bar__user-login">
                        <a title="????ng nh???p" href="http://localhost/Travel/UIClient/login.php"><i
                                class="fa fa-user"></i>&ensp; ????ng Nh???p</a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="????ng nh???p" href="http://localhost/Travel/UIClient/register.php"><i
                                class="fa fa-lock"></i>&ensp; ????ng K??</a>
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
                            <h1> th??ng tin chi ti???t kh??ch s???n</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_search">
                <div style="margin-top:10px" class="main_search__tabs">
                    <ul class="search_tabs__list">
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/index.php">
                                <i class="fas fa-indent"></i></i><span>Trang ch???</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/location.php">
                                <i class="fas fa-umbrella-beach"></i><span>?????a ??i???m</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/hotel.php">
                                <i class="fas fa-hotel"></i><span>Kh??ch S???n</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/typeTourDetail.php">
                                <i class="fas fa-align-left"></i><span>Lo???i Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="http://localhost/Travel/UIClient/tour.php">
                                <i class="fas fa-torii-gate"></i><span>Tour</span>
                            </a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-6"><i class="fas fa-hiking"></i><span>Ho???t ?????ng</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--        About us-->

            <div style="font-size:20px; margin-top:-50px; " class="about">
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
                        </b> <br>
                        <b> M?? kh??ch s???n:&ensp;<?= $row['idKhachSan']?></b> <br></br>
                        <b> S??? l?????ng ng?????i ???:&ensp;<?= $row['soLuongNguoi']?> Ng?????i</b> <br></br>
                        <b> Ng??y nh???n ph??ng:&ensp;
                            <?php
                            $date = date('d/m/Y',strtotime($row['ngayNhanPhong']));
                            echo $date;
                            ?>
                        </b> <br></br>
                        <b> Ng??y tr??? ph??ng:&ensp;
                            <?php
                            $date = date('d/m/Y',strtotime($row['ngayTraPhong']));
                            echo $date;
                            ?>
                        </b> <br></br>
                        <b> ?????a ??i???m:&ensp;<?= $row['tenDiaDiem']?></b> <br></br>
                        <b> Gi?? tour:&ensp;<?= number_format($row['giaPhongKS'])?>&ensp;VN?? </b>
                        <p class="about__text"></p>
                        <div style="margin-top:-5px;" class="button button_about">
                            <div class="button_bcg"></div>
                            <a href="http://localhost/Travel/UIClient/addCart.php?idKhachSan=<?= $row['idKhachSan'] ?>">
                                BOOK<span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box blog__box">
                    <div class="blog_post_text">
                        <p><?=$row['noiDungKS']?></p><br>
                        <p> <b style="color:black">V??? tr?? b???ng ?????:</b> </p>
                        <iframe src="<?php echo $row['banDo'] ?>" width="100%" height="350px" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div style="margin-top:-100px; margin-left:350px" class="wrap">
                <div class="row p-t-20">
                    <div class="col-md-12"><br><b>C??c b??i ????nh gi?? g???n ????y:</b>
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
                                <button id="rateYoo-<?= $row['idDanhGia']?>" value="<?= $row['sao']?>" disabled="true">
                                </button>
                                <b>" <i><?php echo $row['tieuDe']?> </i> "</b> -<?php echo $row['noiDung']?><br>
                                <b>??i c??ng:</b> <?php echo $row['diVoiAi']?> - <?php echo $row['ngayDi']?> <br>
                                <span style="color: #FF5622;"><b><?php echo $row['hoVaTen']?></b></span> - ????nh gi?? v??o:
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
                                    ?????u</a>
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
                                    cu???i
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style=" margin: -10px 50px 30px 50px;">
        <form id="formSubmit" action="" method="post">
            <div class="pt-5" style="color:blue; height: 100px;">
                <center>
                    <h1 style="font-size:30px;"><b>FORM ????NH GI??:</b></h1>
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
                        <h5> <b style="font-size:21px;">X???p h???ng:</b> <span class="text-danger"> *</span>
                        </h5>
                        <div class="" id="vote"></div>
                        <input type="hidden" name="rating" value="0">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">E-mail:</b> <span class="text-danger"> *</span>
                        </h5>
                        <input style="font-size:21px;" type="email" class="form-control"
                            placeholder="Vui l??ng nh???p email" required name="txtEmail">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">Ch??? ?????:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" placeholder="Vui l??ng nh???p ch??? ?????" required class="form-control"
                            type="text" name="txtTitle">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">N???i dung ????nh gi??:</b> <span class="text-danger"> *</span></h5>
                        <input style="font-size:21px;" placeholder="Vui l??ng n???i dung ????nh gi??" required type="text"
                            class="form-control" name="txtInformation">
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">B???n ??i khi n??o?</b> <span class="text-danger"> *</span>
                        </h5>
                        <select style="font-size:21px; height:41px;" name="txtDate" class="form-control">
                            <option value="Th??ng 01 N??m 2021">Th??ng 01 N??m 2021</option>
                            <option value="Th??ng 02 N??m 2021">Th??ng 02 N??m 2021</option>
                            <option value="Th??ng 03 N??m 2021">Th??ng 03 N??m 2021</option>
                            <option value="Th??ng 04 N??m 2021">Th??ng 04 N??m 2021</option>
                            <option value="Th??ng 05 N??m 2021">Th??ng 05 N??m 2021</option>
                            <option value="Th??ng 06 N??m 2021">Th??ng 06 N??m 2021</option>
                            <option value="Th??ng 07 N??m 2021">Th??ng 07 N??m 2021</option>
                            <option value="Th??ng 08 N??m 2021">Th??ng 08 N??m 2021</option>
                            <option value="Th??ng 09 N??m 2021">Th??ng 09 N??m 2021</option>
                            <option value="Th??ng 10 N??m 2021">Th??ng 10 N??m 2021</option>
                            <option value="Th??ng 11 N??m 2021">Th??ng 11 N??m 2021</option>
                            <option value="Th??ng 12 N??m 2021">Th??ng 12 N??m 2021</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <h5> <b style="font-size:21px;">B???n ??i c??ng ai:</b><span class="text-danger"> *</span></h5>
                        <select style="font-size:21px; height:41px;" name="txtPeople" class="form-control">
                            <option value="M???t m??nh">M???t m??nh</option>
                            <option value="B???n b??">B???n b??</option>
                            <option value="C???p ????i">C???p ????i</option>
                            <option value="Gia ????nh (tr??? nh???)">Gia ????nh (tr??? nh???)</option>
                            <option value="Gia ????nh (thanh thi???u ni??n)">Gia ????nh (thanh thi???u ni??n)</option>
                            <option value="Danh nghi???p">Danh nghi???p</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <h5> <b style="font-size:21px;">H??nh ???nh: (N???u c??)</b></h5>
                        <input type="file" name="imgHotel" style="font-size:21px;" class=" form-control">
                    </div>
                    <div style="height: 30px;" class="col-md-12">
                    </div>
                    <div class="col-md-12">
                        <input style="font-size:21px; " class="btn btn-success mx-auto d-block" type="submit"
                            name="btnSend" value="????nh gi??">
                    </div>

                </div>
        </form>
        <?php
            include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
            if (isset($_POST['btnSend'])) {
                if (isset($_SESSION['taiKhoan'])) {
                    $txtFullName =  $_SESSION['taiKhoan'];
                } else {
                    $txtFullName = "Kh??ch";
                }
                $txtEmail = $_POST['txtEmail'];
                $txtTitle = $_POST['txtTitle'];
                $txtInformation = $_POST['txtInformation'];
                $txtRating = $_POST['rating'];
                $txtDate = $_POST['txtDate'];
                $imgHotel = $_FILES['imgHotel']['name'];
                $txtPeople = $_POST['txtPeople'];
                //
                if ($imgHotel != ""){
                    $sql = "INSERT INTO danhgia(hoVaTen, email, tieuDe, noiDung, sao, ngayDi, diVoiAi, hinhAnh, trangThai, idKhachSan) 
                            VALUES('$txtFullName', '$txtEmail', '$txtTitle', '$txtInformation', '$txtRating', '$txtDate', '$txtPeople','$imgHotel', '0', '$idKhachSan')";
                    $query = mysqli_query($conn, $sql);
                    if ($query){
                                    $path = '../../styles/images/' .$_FILES['imgHotel']['name'];
                                    $diaChiIMG = $_FILES['imgHotel']['tmp_name'];
                                    move_uploaded_file($diaChiIMG, $path);
                            echo    "<script>alert('Ch??c m???ng b???n ???? ????nh gi?? kh??ch s???n th??nh c??ng!');
                                        header('Location:http://localhost/Travel/UIClient/hotelDetail.php');
                                    </script>";
                    }
                    else
                        echo    "<script>
                                    alert('????nh gi?? th???t b???i!');
                                </script>";
                }else {
                    $sqlInsert = "INSERT INTO danhgia(hoVaTen, email, tieuDe, noiDung, sao, ngayDi, diVoiAi, trangThai, idKhachSan) 
                            VALUES('$txtFullName', '$txtEmail', '$txtTitle', '$txtInformation', '$txtRating', '$txtDate', '$txtPeople','0', '$idKhachSan')";
                    $sqlInsert = mysqli_query($conn, $sqlInsert);
                    if ($sqlInsert){
                        echo    "<script>alert('Ch??c m???ng b???n ???? ????nh gi?? kh??ch s???n th??nh c??ng!');
                                    header('Location:http://localhost/Travel/UIClient/hotelDetail.php');
                                </script>";
                }
                else
                    echo    "<script>
                                alert('????nh gi?? th???t b???i!');
                            </script>";
                }
            }
        ?>
    </div><br><br>
    </div>
    </div>

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
                    VietTravel t??? h??o l?? m???t ????n v??? ti??u bi???u trong l??nh v???c tour du l???ch ????n nh???n gi???i th?????ng uy
                    t??n
                    nh???t d??nh cho c???ng ?????ng doanh nghi???p Vi???t Nam.
                </p>
                <ul class="footer_social_list">
                    <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="footer_social_item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="footer__blog">
                <div class="footer_title">b???n tin</div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">?????a ??i???m du l???ch H?? 2019</a></div>
                        <div class="footer_blog__date">30/04/2021</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">?????a ??i???m du l???ch H?? 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
                <div class="footer_blog__item">
                    <div class="footer_blog__image"><img src="../styles/images/footer_blog_1.jpg" alt=""></div>
                    <div class="footer_blog__content">
                        <div class="footer_blog__title"><a href="#">?????a ??i???m du l???ch H?? 2019</a></div>
                        <div class="footer_blog__date">30/04/2019</div>
                    </div>
                </div>
            </div>
            <div class="footer__tags">
                <div class="footer_title">Tags</div>
                <ul class="tags_list">
                    <li class="tags_item"><a href="#">Mi???n B???c</a></li>
                    <li class="tags_item"><a href="#">Mi???n Trung</a></li>
                    <li class="tags_item"><a href="#">Mi???n Nam</a></li>
                    <li class="tags_item"><a href="#">???? N???ng</a></li>
                    <li class="tags_item"><a href="#">Qu???ng Nam</a></li>
                    <li class="tags_item"><a href="#">Hu???</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <div class="footer_title">Li??n h???</div>
                <ul class="contact_list">
                    <li class="contact_item">
                        <div class="contact_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact_text">68 H??m Nghi, Ng?? M??y, Quy Nh??n, B??nh ?????nh</div>
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
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script src="../styles/js/main_js.js"></script>
<script type="text/javascript" src="../public/js/voting.js"></script>
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