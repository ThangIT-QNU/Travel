<?php   ob_start(); 
        session_start();

?>
<?php 
        if(isset($_SESSION['tenTaiKhoan']))
        {
            $id = $_SESSION['tenTaiKhoan'];
            $UserName = $_SESSION['txtTaiKhoan'];
        }
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

<body>
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
                        <img src="styles/images/logo.png" alt="logo"> ThangIt
                    </a>
                </div>
                <div class="main_nav__menu">
                    <ul class="main_nav__list">
                        <li class="main_nav__item"><a href="index.php">TRANG CH???</a></li>
                        <li class="main_nav__item"><a href="about.html">GI???I THI???U</a></li>
                        <li class="main_nav__item"><a href="offers.html">??U ????I</a></li>
                        <li class="main_nav__item"><a href="blog.html">TIN T???C</a></li>
                        <li class="main_nav__item"><a href="contact.html">LI??N H???</a></li>
                    </ul>
                </div>
                <div class="main_nav__search">
                    <form action="">
                        <input class="input_search" type="text">
                    </form>
                    <div class="search__item"><i class="fas fa-search"></i></div>
                </div>
            </div>
        </header>
        <div class="main">
            <!--slider-->
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(styles/images/bana-slide.jpg)">
                    </div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1>tour</h1>
                            <h1>Bana Hill</h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(styles/images/hoian-slide.jpg)">
                    </div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInRight">
                            <h1>tour</h1>
                            <h1>H???i An</h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(styles/images/phuquoc_slide.jpg)">
                    </div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInDown">
                            <h1>tour</h1>
                            <h1>Ph?? Qu???c</h1>
                            <div class="button home_slider__button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_slide__nav nav__prev">
                    <i onclick="plusSlides(-1)" class="fas fa-chevron-circle-left"></i>
                </div>
                <div class="main_slide__nav nav__next">
                    <i onclick="plusSlides(1)" class="fas fa-chevron-circle-right"></i></i>
                </div>
                <div class="main_slide__dots">
                    <ul class="customs_dots">
                        <li class="customs_dot active" onclick="currentSlide(1)">01.</li>
                        <li class="customs_dot" onclick="currentSlide(2)">02.</li>
                        <li class="customs_dot" onclick="currentSlide(3)">03.</li>
                    </ul>
                </div>
            </div>
            <div class="main_search">
                <div id="tabs" class="main_search__tabs">
                    <ul class="search_tabs__list">
                        <li class="search_tabs__item">
                            <a href="#tabs-1"><i class="fas fa-hotel"></i><span>Kh??ch s???n</span></a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-2"><i class="fas fa-car"></i><span>Xe cho thu??</span></a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-3"> <i class="fas fa-plane"></i><span>Chuy???n bay</span></a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-4"><i class="fas fa-umbrella-beach"></i><span>Trips</span></a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-5"><i class="fas fa-ship"></i><span>Du thuy???n</span></a>
                        </li>
                        <li class="search_tabs__item">
                            <a href="#tabs-6"><i class="fas fa-hiking"></i><span>Ho???t ?????ng</span></a>
                        </li>
                    </ul>
                    <div id="tabs-1" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>
                    <div id="tabs-2" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>
                    <div id="tabs-3" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>
                    <div id="tabs-4" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>
                    <div id="tabs-5" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>
                    <div id="tabs-6" class="tabs_content animated fadeIn">
                        <form action="" class="search_content">
                            <div class="search_content__item">
                                <div>?????a ??i???m</div>
                                <input type="text" class="search_content__input">
                            </div>
                            <div class="search_content__item">
                                <div>B???t ?????u</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>K???t th??c</div>
                                <input type="text" class="search_content__input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_content__item">
                                <div>Ng?????i l???n</div>
                                <select name="adults" class="search_content__input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_content__item">
                                <div>Tr??? em</div>
                                <select name="children" class="search_content__input">
                                    <option>0</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_content__button">T??m ki???m
                                <span></span><span></span><span></span>
                            </button>
                        </form>
                    </div>

                </div>
            </div>

            <!--        Intro-->
            <div class="main_intro">
                <h2>Nh???ng tour du l???ch t???t nh???t</h2>
                <p>????y l?? nh???ng tour du l???ch t???t nh???t hi???n nay c???a ch??ng t??i.</p>
                <p>S??? l??m b???n h??i l??ng khi ????ng k?? nh???ng tour d?????i ????y.</p>
                <div class="main_intro__items">
                    <div class="intro_item">
                        <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_1.jpg)">
                        </div>
                        <div class="intro_item__content">
                            <div class="intro_date">T??? 15/04 - 15/05</div>
                            <div class="intro_text">
                                <h1>Bana Hill</h1>
                                <div class="intro_price">Gi??: 1,200,000??</div>
                                <div class="rating rating_4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="intro_item">
                        <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_2.jpg)">
                        </div>
                        <div class="intro_item__content">
                            <div class="intro_date">T??? 15/04 - 15/05</div>
                            <div class="intro_text">
                                <h1>H???i An</h1>
                                <div class="intro_price">Gi??: 1,200,000??</div>
                                <div class="rating rating_4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="intro_item">
                        <div class="intro_item__backgroud" style="background-image: url(styles/images/intro_1.jpg)">
                        </div>
                        <div class="intro_item__content">
                            <div class="intro_date">T??? 15/04 - 15/05</div>
                            <div class="intro_text">
                                <h1>Bana Hill</h1>
                                <div class="intro_price">Gi??: 1,200,000??</div>
                                <div class="rating rating_4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="button intro_button">
                                <div class="button_bcg"></div>
                                <a href="#">Xem ngay<span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        CTA-->
            <div class="main_cta" style="background-image: url(styles/images/cta.jpg)">
                <div class="box main_cta__box">
                    <div class="slider" id="single_item">
                        <div>
                            <div class="cta_item">
                                <div class="cta_item__title">G??i tour ???? N???ng san tr???ng</div>
                                <div class="cta_item__text">Tour du l???ch ???? N???ng 4 ng??y 3 ????m ????a du kh??ch ?????n v???i m???t
                                    th??nh
                                    ph??? thu???c v??ng Nam Trung B???, Vi???t Nam. ????y l?? trung t??m kinh t???, v??n ho??, gi??o d???c,
                                    khoa
                                    h???c v?? c??ng ngh??? l???n c???a khu v???c mi???n Trung - T??y Nguy??n. ???? N???ng hi???n l?? m???t trong
                                    13
                                    ???? th??? lo???i 1 ?????ng th???i l?? m???t trong 5 th??nh ph??? tr???c thu???c Trung ????ng ??? Vi???t Nam.
                                    Ngu???n
                                    g???c t??? "???? N???ng" l?? bi???n d???ng c???a t??? Ch??m c??? "DAKNAN", ngh??a l?? v??ng n?????c r???ng l???n
                                    hay
                                    "s??ng l???n", "c???a s??ng c??i". N??m 1835, v???i ch??? d??? c???a vua Minh M???ng, C???a H??n (t??n g???i
                                    ????
                                    N???ng khi ????) tr??? th??nh th????ng c???ng l???n nh???t Mi???n Trung.
                                </div>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">Xem th??m <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="cta_item">
                                <div class="cta_item__title">G??i tour ???? N???ng san tr???ng</div>
                                <div class="cta_item__text">Tour du l???ch ???? N???ng 4 ng??y 3 ????m ????a du kh??ch ?????n v???i m???t
                                    th??nh
                                    ph??? thu???c v??ng Nam Trung B???, Vi???t Nam. ????y l?? trung t??m kinh t???, v??n ho??, gi??o d???c,
                                    khoa
                                    h???c v?? c??ng ngh??? l???n c???a khu v???c mi???n Trung - T??y Nguy??n. ???? N???ng hi???n l?? m???t trong
                                    13
                                    ???? th??? lo???i 1 ?????ng th???i l?? m???t trong 5 th??nh ph??? tr???c thu???c Trung ????ng ??? Vi???t Nam.
                                    Ngu???n
                                    g???c t??? "???? N???ng" l?? bi???n d???ng c???a t??? Ch??m c??? "DAKNAN", ngh??a l?? v??ng n?????c r???ng l???n
                                    hay
                                    "s??ng l???n", "c???a s??ng c??i". N??m 1835, v???i ch??? d??? c???a vua Minh M???ng, C???a H??n (t??n g???i
                                    ????
                                    N???ng khi ????) tr??? th??nh th????ng c???ng l???n nh???t Mi???n Trung.
                                </div>
                                <div class="button cta_button">
                                    <div class="button_bcg"></div>
                                    <a href="#">Xem th??m <span></span> <span></span> <span></span> <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--        Offers-->
            <div class="main_offers">
                <div class="box main_offers__box">
                    <h2 class="offers_title">C??c ??u ????i t???i nh???t</h2>
                    <div class="offers_items">
                        <div class="offers_item">
                            <div class="offers_image">
                                <div class="offers_image_background"
                                    style="background-image: url(styles/images/offers_1.jpg)"></div>
                                <div class="offers_name"><a href="#">Tour T??y B???c</a></div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price">7,000,000??</div>
                                <div class="rating rating_4 offers_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="offers_text">Tour du l???ch h?? Mai Ch??u - M???c Ch??u s??? ????a b???n ?????n th??m thung
                                    l??ng
                                    Mai Ch??u y??n b??nh trong s???m mai, nh???ng c??nh ?????ng l??a xanh th???m l??ng ng?????i hay nh???ng
                                    ng??i
                                    nh?? s??n nh??? san s??t nhau.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">?????c th??m</a></div>
                            </div>
                        </div>
                        <div class="offers_item">
                            <div class="offers_image">
                                <div class="offers_image_background"
                                    style="background-image: url(styles/images/offers_2.jpg)"></div>
                                <div class="offers_name"><a href="#">Tour Quy Nh??n</a></div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price">8,690,000??</div>
                                <div class="rating rating_4 offers_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="offers_text">Tour Du l???ch Quy Nh??n 4 ng??y t??? H?? N???i - Du l???ch Quy Nh??n c??ng Du
                                    L???ch Vi???t s??? ????a b???n ?????n v???i Quy Nh??n ??? m???t th??nh ph??? bi???n xinh ?????p, kh??ng ???n ??o,
                                    c??ng
                                    kh??ng ?????p l???ng l???y b???ng Nha Trang.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">?????c th??m</a></div>
                            </div>
                        </div>
                        <div class="offers_item">
                            <div class="offers_image">
                                <div class="offers_image_background"
                                    style="background-image: url(styles/images/offers_3.jpg)"></div>
                                <div class="offers_name"><a href="#">Tour Mi???n Trung</a></div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price">7,299,000??</div>
                                <div class="rating rating_4 offers_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="offers_text"> Tour b???t ?????u t??? ???? N???ng - Bana Hill - H???i An - Hu??? - Th??nh ?????i
                                    La
                                    Vang - ?????ng Phong Nha0000 - Tham gia l??? h???i ph??o hoa qu???c t??? ???? N???ng 2019 ch??? ?????
                                    "NH???NG D??NG S??NG K??? CHUY???N"</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">?????c th??m</a></div>
                            </div>
                        </div>
                        <div class="offers_item">
                            <div class="offers_image">
                                <div class="offers_image_background"
                                    style="background-image: url(styles/images/offers_4.jpg)"></div>
                                <div class="offers_name"><a href="#">Tour C??n ?????o</a></div>
                            </div>
                            <div class="offers_content">
                                <div class="offers_price">9,900,000??</div>
                                <div class="rating rating_4 offers_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="offers_text">Du L???ch C??n ?????o - C??n ?????o ???????c xem l?? h??n ?????o du l???ch v???i nh???ng
                                    b??i
                                    t???m hoang s?? tuy???t ?????p, l??n n?????c trong xanh m??t l???nh, b??i c??t d??i ph???ng m???n. ???????c v??
                                    nh??
                                    thi??n ???????ng ngh??? d?????ng.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="styles/images/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="styles/images/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">?????c th??m</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        testmonials-->
            <div class="main_testimonials">
                <div class="box main_testimonials__box">
                    <h2>Kh??ch h??ng n??i g?? v??? ch??ng t??i?</h2>
                    <div id="testimonials" data-slick='{"slidesToShow": 3, "slidesToScroll": 1}'>
                        <div>
                            <div class="test_item">
                                <div class="test_item_box">
                                    <div class="test_image"><img src="styles/images/test_1.jpg" alt="">
                                    </div>
                                    <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Tr?????ng Giang</div>
                                                <div class="test_date">12-04-2019</div>
                                            </div>
                                            <div class="test_quote_title">" K??? ngh??? th???t tuy???t !!! "</div>
                                            <p class="test_quote_text">C??c th???ng c???nh th???t ?????p, khi???n t??i kh??ng th??? qu??n
                                                ???????c. T??i r???t h??i l??ng v??? d???ch c??? c???a ViVuViet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="test_item">
                                <div class="test_item_box">
                                    <div class="test_image"><img src="styles/images/test.jpg" alt="">
                                    </div>
                                    <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Ho??ng Y???n Chibi</div>
                                                <div class="test_date">12-04-2019</div>
                                            </div>
                                            <div class="test_quote_title">" K??? ngh??? th???t tuy???t !!! "</div>
                                            <p class="test_quote_text">C??c th???ng c???nh th???t ?????p, khi???n t??i kh??ng th??? qu??n
                                                ???????c. T??i r???t h??i l??ng v??? d???ch c??? c???a ViVuViet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="test_item">
                                <div class="test_item_box">
                                    <div class="test_image"><img src="styles/images/test_3.jpg" alt="">
                                    </div>
                                    <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Tr???n Th??nh</div>
                                                <div class="test_date">12-04-2019</div>
                                            </div>
                                            <div class="test_quote_title">" K??? ngh??? th???t tuy???t !!! "</div>
                                            <p class="test_quote_text">C??c th???ng c???nh th???t ?????p, khi???n t??i kh??ng th??? qu??n
                                                ???????c. T??i r???t h??i l??ng v??? d???ch c??? c???a ViVuViet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="test_item">
                                <div class="test_item_box">
                                    <div class="test_image"><img src="styles/images/test.jpg" alt="">
                                    </div>
                                    <div class="test_icon"><img src="styles/images/island_t.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Ho??ng Y???n Chibi</div>
                                                <div class="test_date">12-04-2019</div>
                                            </div>
                                            <div class="test_quote_title">" K??? ngh??? th???t tuy???t !!! "</div>
                                            <p class="test_quote_text">C??c th???ng c???nh th???t ?????p, khi???n t??i kh??ng th??? qu??n
                                                ???????c. T??i r???t h??i l??ng v??? d???ch c??? c???a ViVuViet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--        Hotel-->
            <div class="main_hotel">
                <div class="box main_hotel__box">
                    <h2 class="main_hotel_title">Kh??ch s???n ???????c ??a th??ch nh???t</h2>
                    <div class="hotel_items">
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_1.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Green Plaza Hotel</a></div>
                                <div class="hotel_price">1,000,000??</div>
                                <div class="hotel_location">H???i Ch??u, ???? N???ng</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_2.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Hilton ???? N???ng</a></div>
                                <div class="hotel_price">3,000,000??</div>
                                <div class="hotel_location">H???i Ch??u, ???? N???ng</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_3.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Hanoi Hotel</a></div>
                                <div class="hotel_price">1,900,00??</div>
                                <div class="hotel_location">H?? N???i</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_4.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Sofitel S??i G??n</a></div>
                                <div class="hotel_price">4,100,000??</div>
                                <div class="hotel_location">Qu???n 1, HCM</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_1.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Green Plaza Hotel</a></div>
                                <div class="hotel_price">1,000,000??</div>
                                <div class="hotel_location">H???i Ch??u, ???? N???ng</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_2.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Hilton ???? N???ng</a></div>
                                <div class="hotel_price">3,000,000??</div>
                                <div class="hotel_location">H???i Ch??u, ???? N???ng</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_3.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Hanoi Hotel</a></div>
                                <div class="hotel_price">1,900,00??</div>
                                <div class="hotel_location">H?? N???i</div>
                            </div>
                        </div>
                        <div class="hotel_item">
                            <div class="hotel_image">
                                <img src="styles/images/hotel_4.jpg" alt="">
                            </div>
                            <div class="hotel_content">
                                <div class="hotel_title"><a href="#">Sofitel S??i G??n</a></div>
                                <div class="hotel_price">4,100,000??</div>
                                <div class="hotel_location">Qu???n 1, HCM</div>
                            </div>
                        </div>
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
                            <a href="#"><img src="styles/images/logo.png" alt="">ThangIT</a>
                        </div>
                    </div>
                    <p class="footer_about__text">
                        ThangIT t??? h??o l?? m???t ????n v??? ti??u bi???u trong l??nh v???c tour du l???ch ????n nh???n gi???i th?????ng uy t??n
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
                        <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                        <div class="footer_blog__content">
                            <div class="footer_blog__title"><a href="#">?????a ??i???m du l???ch H?? 2019</a></div>
                            <div class="footer_blog__date">30/04/2021</div>
                        </div>
                    </div>
                    <div class="footer_blog__item">
                        <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
                        <div class="footer_blog__content">
                            <div class="footer_blog__title"><a href="#">?????a ??i???m du l???ch H?? 2019</a></div>
                            <div class="footer_blog__date">30/04/2019</div>
                        </div>
                    </div>
                    <div class="footer_blog__item">
                        <div class="footer_blog__image"><img src="styles/images/footer_blog_1.jpg" alt=""></div>
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