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
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../public/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/styles.css">
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
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="color:blue;"><b> ADD Tài Khoản</b>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>ADD Tài Khoản</h3>
                            </div>

                            <div class="panel-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <span class="text-danger">Lưu ý các trường có dấu (*) bắt buộc phải
                                            nhập</span>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tên Tài Khoản:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập tên tài khoản"
                                                        name="txtUserName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Mật Khẩu:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập mật khẩu" name="txtPassWord"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Họ và tên:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập họ và tên đầy đủ của bạn"
                                                        name="txtFullName" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Email:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập email" name="txtEmail"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">SĐT:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập số điện thoại" name="txtPhone"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Phân Quyền:<span
                                                            class="text-danger">*</span></label>
                                                    <select class="form-control" id="txtPermission"
                                                        name="txtPermission">
                                                        <option value="1">KHÁCH HÀNG</option>
                                                        <option value="2">ADMIN</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="btnAdd" value="ADD"
                                            class="form-control btn btn-success">
                                    </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php
                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        if (isset($_POST['btnAdd'])) {
                        $txtUserName = $_POST['txtUserName'];
                        $txtPassWord = $_POST['txtPassWord'];
                        $txtFullName = $_POST['txtFullName'];
                        $txtEmail = $_POST['txtEmail'];
                        $txtPhone = $_POST['txtPhone'];
                        $txtPermission = $_POST['txtPermission'];
                        //
                        $sql = "INSERT INTO taikhoan (tenTaiKhoan, matKhau, hoVaTen, email, sdt, phanQuyen) 
                                VALUES('$txtUserName', '$txtPassWord', '$txtFullName', '$txtEmail', '$txtPhone', '$txtPermission')";
                        $query = mysqli_query($conn, $sql);
                        if ($query)
                            echo    "<script>alert('Chúc mừng bạn đã thêm một tài khoản thành công!');
                                        location.href = 'http://localhost/Travel/UIAdmin/Account/account.php';
                                    </script>";
                        else
                            echo "<script>alert('Thêm tài khoản thất bại,vui lòng kiểm tra lại!');</script>";
                    }
                    ?>
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
    <script src="../../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../public/js/raphael.min.js"></script>
    <script src="../../public/js/morris.min.js"></script>
    <script src="../../public/js/morris-data.js"></script>

</body>

</html>