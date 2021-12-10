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

                <div class="container">
                    <div style="margin-top: -50px;" class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="color:blue;"><b>Cập Nhật Thông Tin Admin</b></h1>
                        </div>
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card card-outline-primary">

                                        <?php
                                        include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                        if(isset($_SESSION['idTaikhoan']))
                                        $user = $_SESSION['idTaikhoan'];           
                                        $sql = "SELECT * FROM taikhoan WHERE idTaiKhoan='$user' ";
                                        $query = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_array($query);
                                        ?>
                                        <div class="card-body">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Họ và tên:</label>
                                                            <input type="text" value="<?php echo $row['hoVaTen'] ?>"
                                                                name="txtFullName" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Tên tài khoản:</label>
                                                        <input type="text" value="<?php echo $row['tenTaiKhoan'] ?>"
                                                            name="txtUserName" disabled class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Mật khẩu:</label>
                                                        <input type="text" value="<?php echo $row['matKhau'] ?>"
                                                            name="txtPassWord" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Quyền:</label>
                                                        <input type="text" value="
                                                        <?php
                                                            if ($row['phanQuyen'] == 1)
                                                                echo "Khách hàng";
                                                            else
                                                                echo "Admin";
                                                        ?>" disabled class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Email:</label>
                                                        <input type="text" value="<?php echo $row['email'] ?>"
                                                            name="txtEmail" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">SDT:</label>
                                                        <input type="text" name="txtPhone"
                                                            value="<?php echo $row['sdt'] ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Ngày đăng nhập:</label>
                                                        <input type="text" name="txtNgayDangNhap" value="
                                                        <?php
                                                            $date = date('d-m-Y - H:i:s',strtotime($row['ngayDangNhap']));
                                                            echo $date;?>" disabled class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label">Mã xác nhận:</label>
                                                        <input type="text" value="<?php echo $row['OTP'] ?>" disabled
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success" name="btnUpdate">
                                                            <i class="fa fa-check"></i>
                                                            Update</button>
                                                        <a href="http://localhost/Travel/UIAdmin/Home.php">
                                                            <button type="button"
                                                                class="btn btn-inverse">Cancel</button>
                                                        </a>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                        <?php
                                            if (isset($_POST['btnUpdate'])) {
                                                $passWord = $_POST['txtPassWord'];
                                                $fullName = $_POST['txtFullName'];
                                                $email = $_POST['txtEmail'];
                                                $phone = $_POST['txtPhone'];
                                                $sqlUpdate = "UPDATE taikhoan SET matKhau = '$passWord', hoVaTen = '$fullName',
                                                                    email = '$email', sdt = '$phone' WHERE idTaiKhoan = '$user' ";
                                                $query = mysqli_query($conn, $sqlUpdate);
                                                if ($query) {
                                                        echo    "<script> 
                                                                    alert('Bạn đã cập nhật thông tin tài khoản thành công!');
                                                                    location.href = 'http://localhost/Travel/UIAdmin/Account/account.php';
                                                                </script>";
                                                }else{
                                                    echo    "<script>
                                                                alert('Cập nhật thất bại');
                                                                location.href = 'http://localhost/Travel/UIAdmin/Account/account.php';
                                                            </script>";
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
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