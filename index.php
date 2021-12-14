<?php   ob_start(); 
        session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home - Travel</title>
    <link rel="stylesheet" type="text/css" href="styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="styles/css/Animation.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script>
    window.onscroll = function() {
        scrollFunction(),
            backTop()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
            $(document).ready(function() {
                $(".top_bar").hide('slow');
            });

        } else {
            $(document).ready(function() {
                $(".top_bar").show();
            });
        }
    }

    $(function() {
        $("#tabs").tabs();
    });

    $(document).ready(function() {
        $(".search__item").click(function() {
            $(".input_search").toggle("slow");
        });
    })
    </script>
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
                        <a href="http://localhost/Travel/UIClient/editProfile.php" title="Thông Tin">
                            <i class="fa fa-user"></i><?php echo $_SESSION['taiKhoan'] ?></a>
                    </div>
                    <div class="bar__user-regis">
                        <a title="Đăng Xuất" href="http://localhost/Travel/logout.php">
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
                        <img src="styles/images/logo.png" alt="logo">Viettravel
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <!--slider-->
            <div class="main__slide">
                <?php
                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                $sql = "SELECT * FROM diadiem  LIMIT 10";
                $query = mysqli_query($conn, $sql);
                while ($row = $query->fetch_assoc()) {
                ?>
                <div class="home_slide__item">
                    <div class="home_slide__background"
                        style="background-image: url(./styles/images/<?=$row['hinhAnh']?>)"></div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1>tour</h1>
                            <h1><?= $row['tenDiaDiem']?></h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                                <a href="http://localhost/Travel/UIClient/location.php">Xem
                                    ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="main_slide__nav nav__prev">
                    <i onclick="plusSlides(-1)" class="fas fa-chevron-circle-left"></i>
                </div>
                <div class="main_slide__nav nav__next">
                    <i onclick="plusSlides(1)" class="fas fa-chevron-circle-right"></i></i>
                </div>
                <div class="main_slide__dots">
                    <ul class="customs_dots">
                        <li class="customs_dot active" onclick="currentSlide(1)">1</li>
                        <li class="customs_dot" onclick="currentSlide(2)">2</li>
                        <li class="customs_dot" onclick="currentSlide(3)">3</li>
                        <li class="customs_dot" onclick="currentSlide(4)">4</li>
                        <li class="customs_dot" onclick="currentSlide(5)">5</li>
                        <li class="customs_dot" onclick="currentSlide(6)">6</li>
                        <li class="customs_dot" onclick="currentSlide(7)">7</li>
                        <li class="customs_dot" onclick="currentSlide(8)">8</li>
                        <li class="customs_dot" onclick="currentSlide(9)">9</li>
                        <li class="customs_dot" onclick="currentSlide(10)">10</li>
                    </ul>
                </div>
            </div>

            <div class="main_search">
                <div class="main_search__tabs">
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
                            <a href="#tabs-6"><i class="fas fa-hiking"></i><span>Hoạt động</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--        Intro-->
            <div style="margin-top:-60px;" class="main_intro">
                <h2>Những tour du lịch tốt nhất</h2>
                <p>Đây là những tour du lịch tốt nhất hiện nay của chúng tôi.</p>
                <p>Sẽ làm bạn hài lòng khi đăng ký những tour dưới đây.</p>
                <div class="main_intro__items">
                    <?php
                    include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                    $sql = "SELECT * FROM tour,diadiem WHERE diadiem.idDiaDiem = tour.idDiaDiem  LIMIT 21,3";
                    $query = mysqli_query($conn, $sql);
                    while ($row = $query->fetch_assoc()) {
                    ?>
                    <a href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $row['idTour']?>"
                        title="Thông Tin Chi Tiết ">
                        <div class="intro_item">
                            <div class="intro_item__backgroud"
                                style="background-image: url(styles/images/<?= $row['hinhAnhTour'] ?>)">
                            </div>
                            <div class="intro_item__content">
                                <div class="intro_date">Từ
                                    <?php
                                        $date = date('d-m-Y',strtotime($row['ngayKhoiHanhTour']));
                                        echo $date;
                                    ?>
                                </div>
                                <div class="intro_text">
                                    <h4>
                                        <span>
                                            <marquee>
                                                <a
                                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $row['idTour']?>">
                                                    <b style="color:white;font-size:28px"><?= $row['tenTour'] ?></b>
                                                </a>
                                            </marquee>
                                        </span>
                                    </h4>
                                    <div style="font-size:20px; color:#EEEEEE; margin-top:30px" class="intro_price">
                                        <b>Giá: <?= number_format($row['giaTour']) ?> VNĐ</b>
                                    </div>
                                    <div style="font-size:20px; color:#EEEEEE; margin-top:20px" class="intro_price">
                                        <b>Địa điểm: <?= $row['tenDiaDiem'] ?></b>
                                    </div>
                                </div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div>
                                    <a href="http://localhost/Travel/UIClient/addCart.php?idTour=<?= $row['idTour'] ?>">
                                        Đặt Ngay<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <!--        Intro-->
            <div style="margin-top:-150px;" class="main_intro">
                <h2>Những tour du lịch yêu thích nhất</h2>
                <p>Đây là những tour du lịch được khách hàng yêu thích nhất hiện nay của chúng tôi.</p>
                <p>Sẽ làm bạn hài lòng khi đăng ký những tour dưới đây.</p>
                <div class="main_intro__items">
                    <?php
                    include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                    $sql = "SELECT * FROM tour,diadiem WHERE diadiem.idDiaDiem = tour.idDiaDiem  LIMIT 13,3";
                    $query = mysqli_query($conn, $sql);
                    while ($row = $query->fetch_assoc()) {
                    ?>
                    <a href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $row['idTour']?>"
                        title="Thông Tin Chi Tiết ">
                        <div class="intro_item">
                            <div class="intro_item__backgroud"
                                style="background-image: url(styles/images/<?= $row['hinhAnhTour'] ?>)">
                            </div>
                            <div class="intro_item__content">
                                <div class="intro_date">Từ
                                    <?php
                                        $date = date('d-m-Y',strtotime($row['ngayKhoiHanhTour']));
                                        echo $date;
                                    ?>
                                </div>
                                <div class="intro_text">
                                    <h4>
                                        <span>
                                            <marquee>
                                                <a
                                                    href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $row['idTour']?>">
                                                    <b style="color:white;font-size:28px"><?= $row['tenTour'] ?></b>
                                                </a>
                                            </marquee>
                                        </span>
                                    </h4>
                                    <div style="font-size:20px; color:#EEEEEE; margin-top:30px" class="intro_price">
                                        <b>Giá: <?= number_format($row['giaTour']) ?> VNĐ</b>
                                    </div>
                                    <div style="font-size:20px; color:#EEEEEE; margin-top:20px" class="intro_price">
                                        <b>Địa điểm: <?= $row['tenDiaDiem'] ?></b>
                                    </div>
                                </div>
                                <div class="button intro_button">
                                    <div class="button_bcg"></div>
                                    <a href="http://localhost/Travel/UIClient/addCart.php?idTour=<?= $row['idTour'] ?>">
                                        Đặt Ngay<span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <!--        CTA-->
            <div class="main_cta" style="background-image: url(styles/images/cta.jpg)">
                <div class="box main_cta__box">
                    <div class="slider" id="single_item">
                        <?php
                        include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                        $sql = "SELECT * FROM loaitour";
                        $query = mysqli_query($conn, $sql);
                        while ($row = $query->fetch_assoc()) {
                        ?>
                        <div>
                            <div class="cta_item">
                                <div class="cta_item__title"><?=$row['tenLoaiTour']?></div>
                                <div class="cta_item__text"><?=$row['thongTinLoaiTour']?> </div>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="http://localhost/Travel/UIClient/typeTourDetail.php">
                                        Xem thêm <span></span><span></span> <span></span> <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--        Offers-->
            <div class="main_offers">
                <div class="box main_offers__box">
                    <h2 class="offers_title">Các ưu đãi tối nhất</h2>
                    <div class="offers_items">
                        <?php
                        include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                        $sql = "SELECT * FROM tour,diadiem WHERE diadiem.idDiaDiem = tour.idDiaDiem LIMIT 0,4";
                        $query = mysqli_query($conn, $sql);
                        while ($row = $query->fetch_assoc()) {
                        ?>
                        <div class="offers_item">
                            <div class="offers_image">
                                <div class="offers_image_background"
                                    style="background-image: url(styles/images/<?= $row['hinhAnhTour'] ?>)"></div>
                                <div class="offers_name">
                                    <a><?= $row['tenDiaDiem'] ?></a>
                                </div>
                            </div>
                            <div class="offers_content">
                                <div style="font-size:22px" class="offers_price"><?= number_format($row['giaTour'])?>
                                    VNĐ</div>
                                <p style="font-size:22px" class="offers_text">Tour <?=$row['tenTour']?></p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link">
                                    <a
                                        href="http://localhost/Travel/UIClient/tourDetail.php?idTour=<?= $row['idTour']?>">Đọc
                                        thêm</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--        testmonials-->

            <!--        Hotel-->
            <div class="main_hotel">
                <div class="box main_hotel__box">
                    <h2 class="main_hotel_title">Khách sạn được ưa thích nhất</h2>
                    <div class="hotel_items">
                        <?php
                        include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                        $sql = "SELECT * FROM khachsan,diadiem WHERE khachsan.idDiaDiem = diadiem.idDiaDiem LIMIT 8";
                        $query = mysqli_query($conn, $sql);
                        while ($row = $query->fetch_assoc()) {
                        ?>
                        <a href="http://localhost/Travel/UIClient/hotelDetail.php?idKhachSan=<?= $row['idKhachSan']?>">
                            <div class="hotel_item">
                                <div class="hotel_image">
                                    <img src="styles/images/<?=$row['hinhAnhKS']?>" alt="">
                                </div>
                                <div class="hotel_content">
                                    <div class="hotel_title"><a href="#"><?=$row['tenKhachSan']?></a></div>
                                    <div class="hotel_price"><?=number_format($row['giaPhongKS'])?> VNĐ</div>
                                    <div class="hotel_location"><?=$row['tenDiaDiem']?></div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
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

    </div>

</body>
<script src="styles/js/main_js.js"></script>
<script>
$("#single_item").slick({
    dots: true
});
$("#testimonials").slick({
    dots: false
});
</script>

</html>

<?php ob_end_flush(); ?>