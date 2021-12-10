<?php   
    ob_start(); 
    session_start();
    
    if(!isset($_SESSION['taiKhoan'])) 
    {  
        echo "<script> 
                alert('Vui lòng đăng nhập hệ thống!');location.href = 'http://localhost/Travel/UIClient/login.php';
            </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Home</title>
    <!-- icon -->
    <link rel="shortcut icon" href="https://v1study.com/favicon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Morris Charts CSS -->
    <link href="../public/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
</head>

<body style="font-family: 'Times New Roman', Times, serif;">

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost/Travel/UIAdmin/index.php">
                    <span class="text-center">
                        TRAVEL MANAGERS
                    </span>
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <?php if(isset($_SESSION['taiKhoan'])){?>
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i>
                        <?php echo $_SESSION['taiKhoan']?><b class="caret"></b>
                    </a>
                    <?php} else{
                        ?>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/Travel/UIAdmin/profile.php">
                                <i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="http://localhost/Travel/logout.php">
                                <i class="fa fa-fw fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                    <?php } ?>
                </li>
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/Account/account.php">
                            <i class="fa fa-table"></i><b> Quản Lý Tài Khoản</b>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/Location/location.php">
                            <i class="fas fa-globe-americas"></i><b> Quản Lý Địa
                                Điểm</b>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/TypeTour/typeTour.php">
                            <i class="fas fa-align-justify"></i><b> Quản Lý Loại
                                Tour</b>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/Tour/tour.php">
                            <i class="fa fa-sitemap "></i><b> Quản Lý Tour</b>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/Hotel/hotel.php">
                            <i class="fa fa-hotel "></i><b> Quản Lý Khách Sạn</b>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/Travel/UIAdmin/Comment/comment.php">
                            <i class="fas fa-comment-dots"></i><b> Quản Lý Đánh
                                Giá</b>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-comment-dots"></i><b> Quản Lý Hóa
                                Đơn</b>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">

                <div style="margin-top: -50px;" class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color:blue;"><b>Trang Chủ</b></h1>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-user-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM taikhoan")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Tài Khoản</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/Account/account.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel " style="background:#B5AB53;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-globe-americas fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM diadiem")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Địa Điểm</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/Location/location.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background:#C7F011;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-align-left fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM loaitour")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Loại Tour</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/TypeTour/typeTour.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-umbrella-beach fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM tour")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Tour</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/Tour/tour.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background:#FF9130;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-bed fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM khachsan")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Khách Sạn</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/Hotel/hotel.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM danhgia")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Đánh Giá!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="http://localhost/Travel/UIAdmin/Comment/comment.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include "/xampp/htdocs/Travel/DBConnect/DBConnect.php";
                                                $allDong = mysqli_query($conn, "SELECT * FROM diadiem")->num_rows;
                                                echo $allDong;
                                                ?>
                                        </div>
                                        <div>Quản Lý Hóa Đơn</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel" style="background:#00B1B8;">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Quản Lý Hóa Đơn Chi Tiết!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- /.container-fluid -->
            </div>
        </div>
        <!-- End Content -->
        <div class="row">
            <div class="text-center">
                <footer style="background: none; color: #000; padding: 15px 0px;font-size: 1.3em	">
                    &copy; 2021 || Admin Nhóm 2 - Đề Tài: Du Lịch
                </footer>
            </div>
        </div>
    </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/js/raphael.min.js"></script>
    <script src="../public/js/morris.min.js"></script>
    <script src="../public/js/morris-data.js"></script>

</body>

</html>