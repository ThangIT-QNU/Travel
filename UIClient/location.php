<?php   ob_start(); 
        session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home - Travel</title>
    <link rel="stylesheet" type="text/css" href="../styles/css/main_style.css">
    <link rel="stylesheet" type="text/css" href="../styles/css/Animation.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/tooltipster/dist/css/tooltipster.bundle.min.css" />
    <script type="text/javascript" src="../styles/tooltipster/dist/js/tooltipster.bundle.min.js"></script>
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
        $('.tooltip').tooltipster();
    });
    $(document).ready(function() {
        $(".zoom_img").mouseover(function() {
            $(this).css({
                width: "110%"
            })
        })
    });
    $(document).ready(function() {
        $(".zoom_img").mouseout(function() {
            $(this).css({
                width: "100%"
            })
        })
    });
    </script>
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
                        <a href="editProfile.php" title="Thông Tin"><i class="fa fa-user"></i>
                            <?php echo $_SESSION['taiKhoan'] ?></a>
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
                    <a style="font-family: 'Times New Roman', Times, serif;" href="http://localhost/Travel/index.php">
                        <img src="../styles/images/logo.png" alt="logo">Viettravel
                    </a>
                </div>
            </div>
        </header>
        <div class="main">
            <!--slider-->
            <div class="main__slide">
                <div class="home_slide__item">
                    <div class="home_slide__background" style="background-image: url(../styles/images/offers_2.jpg)">
                    </div>
                    <div class="home_slider__content">
                        <div class="home_slider_content_inner animated bounceInLeft">
                            <h1></h1>
                            <h1>Địa điểm</h1>
                        </div>
                    </div>
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
                                    <div style=" margin-left:50px; font-size:17px;">Địa điểm</div>
                                    <input type="text" name="keySearch"
                                        style=" font-family: 'Times New Roman'; font-size:18px; margin-left:50px; width: 900px;"
                                        class="search_content__input"
                                        placeholder="Nhập vào tên địa điểm mà bạn muốn tìm kiếm">
                                </div>
                                <button name="btnSearch" style="font-family: 'Times New Roman'; margin-right: 25px;"
                                    class="button search_content__button">Tìm kiếm
                                    <span></span><span></span><span></span>
                                </button>
                            </form>
                            <?php
                                if (isset($_GET['btnSearch'])) {
                                    $keySearch = $_GET['keySearch'];
                                    header("Location:http://localhost/Travel/UIClient/searchLocation.php?key=$keySearch");
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--        blog-->
            <div class="blog">
                <div class="box blog__box">
                    <div class="blog__list">
                        <?php
                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        $soDongHT = 2;
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $pageTT = ($page - 1) * $soDongHT;
                        $allDong = mysqli_query($conn, "SELECT * FROM diadiem")->num_rows;
                        $allPage = ceil($allDong / $soDongHT);
                        $sql = "SELECT * FROM diadiem LIMIT $soDongHT OFFSET $pageTT";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="blog_post">
                            <div class="blog_post_image">
                                <img class="zoom_img" src="../styles/images/<?= $row['hinhAnh']?>" alt="">
                                <div class="blog_post_date"><span>21/04/2019</span></div>
                            </div>
                            <div class="blog_post_meta">
                            </div>
                            <div class="blog_post_title"><a href="#"><?= $row['tenDiaDiem']?></a></div>
                            <div class="blog_post_text">
                                <p><?= $row['noiDung']?></p>
                            </div>
                        </div>
                        <?php }  ?>
                        <div class="blog_navigation">
                            <ul>
                                <li class="blog_dot active">
                                    <a class="page-link"
                                        href="http://localhost/Travel/UIClient/location.php?page=1">Trang
                                        đầu</a>
                                </li>
                                <?php
                                    for ($num = 1; $num <= $allPage; $num++) {
                                        if ($num != $page) {
                                            if ($num > $page - 2 && $num < $page + 2) {
                                ?>
                                <li class="blog_dot active">
                                    <a class="page-link"
                                        href="http://localhost/Travel/UIClient/location.php?page=<?= $num ?>"><?= $num ?>
                                    </a>
                                </li>
                                <?php
                                        }
                                    } else {
                                        ?>
                                <li class="blog_dot active">
                                    <a class="page-link"
                                        href="http://localhost/Travel/UIClient/location.php?page=<?= $num ?>"><?= $num ?>
                                    </a>
                                </li>
                                <?php }
                                } ?>
                                <li class="blog_dot active">
                                    <a class="page-link"
                                        href="http://localhost/Travel/UIClient/location.php?page=<?= $allPage ?>">Trang
                                        cuối
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__sidebar">
                        <div class="sidebar_latest_posts">
                            <div class="sidebar_title">Bài viết mới nhất</div>
                            <div class="latest_posts">
                                <div class="latest_post">
                                    <div class="latest_post_image"><img src="../styles/images/latest_1.jpg" alt="">
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_title"><a href="#">Bãi biển đẹp ở Đà Nẵng</a></div>
                                        <div class="latest_post_meta">by VietTravel - 21/04/2019</div>
                                    </div>
                                </div>
                                <div class="latest_post">
                                    <div class="latest_post_image"><img src="../styles/images/latest_1.jpg" alt="">
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_title"><a href="#">Cẩm nang du lịch Quảng Nam</a></div>
                                        <div class="latest_post_meta">by VietTravel - 21/04/2019</div>
                                    </div>
                                </div>
                                <div class="latest_post">
                                    <div class="latest_post_image"><img src="../styles/images/latest_1.jpg" alt="">
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_title"><a href="#">Các tour biển đảo Việt Nam</a></div>
                                        <div class="latest_post_meta">by VietTravel - 21/04/2019</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar_gallery">
                            <div class="sidebar_title">Bộ sưu tập</div>
                            <div class="gallery_content">
                                <ul class="gallery_items">
                                    <li class="gallery_item"><a href="#"><img src="../styles/images/gallery_3.jpg"
                                                alt=""></a>
                                    </li>
                                    <li class="gallery_item"><a href="#"><img src="../styles/images/gallery_5.jpg"
                                                alt=""></a>
                                    </li>
                                    <li class="gallery_item"><a href="#"><img src="../styles/images/gallery_6.jpg"
                                                alt=""></a>
                                    </li>

                                </ul>
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
    </div>
</body>
<script src="../styles/js/main_js.js"></script>

</html>
<?php ob_end_flush(); ?>