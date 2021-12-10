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
    <script src="../ckeditor/ckeditor.js"></script>
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
                    <div class="col-md-12">
                        <div class="col-lg-5">
                            <h1 class="page-header" style="color:blue;"><b>Thêm Khách Sạn</b>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <h3>Thêm Khách Sạn</h3>
                            </div>

                            <div class="panel-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Tên Khách sạn:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập tên khách sạn"
                                                        name="txtNameHotel" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Hình Ảnh:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" name="imgHotel" class=" form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Địa Điểm:</label>
                                                    <select class="form-control" id="txtLocation" name="txtLocation">
                                                        <?php
                                                            include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                                            $sql = "SELECT * FROM diadiem";
                                                            $query = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                        <option value="<?= $row['idDiaDiem'] ?>">
                                                            <?= $row['tenDiaDiem'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Giá Phòng:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập giá phòng khách sạn"
                                                        name="txtPrice" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Số lượng người:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập số lượng người ở"
                                                        name="txtNumber" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày nhận phòng::<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="txtDateStart" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày trả phòng::<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" name="txtDateEnd" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Vị trí bản đồ:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" placeholder="Nhập vị trí bản đồ(Nếu có)"
                                                        name="txtMap" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Thông tin :<span
                                                            class="text-danger">*</span></label>
                                                    <textarea name="txtInformation"
                                                        placeholder="Giới thiệu khách sạn..." required
                                                        class="form-control">
                                                    </textarea>
                                                    <script>
                                                    CKEDITOR.replace('txtInformation');
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="btnAdd" value="Thêm"
                                            class=" col-md-6 form-control btn btn-success">
                                    </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php
                        include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        if (isset($_POST['btnAdd'])) {
                            $txtNameHotel = $_POST['txtNameHotel'];
                            $imgHotel = $_FILES['imgHotel']['name'];
                            $txtInformation = $_POST['txtInformation'];
                            $txtNumber = $_POST['txtNumber'];
                            $txtDateStart = $_POST['txtDateStart'];
                            $txtDateEnd = $_POST['txtDateEnd'];
                            $txtPrice = $_POST['txtPrice'];
                            $txtLocation = $_POST['txtLocation'];
                            $txtMap = $_POST['txtMap'];
                            //
                            if ($imgHotel != "") {
                                $sqlUpdate = "INSERT INTO khachsan (tenKhachSan, hinhAnhKS, noiDungKS, soLuongNguoi, ngayNhanPhong, ngayTraPhong, giaPhongKS, banDo, idDiaDiem) 
                                        VALUES('$txtNameHotel', '$imgHotel', '$txtInformation', '$txtNumber', '$txtDateStart', '$txtDateEnd', '$txtPrice', '$txtMap', '$txtLocation')";
                                $query = mysqli_query($conn, $sqlUpdate);
                                if ($query){
                                    $path = '../../styles/images/' .$_FILES['imgHotel']['name'];
                                    $diaChiIMG = $_FILES['imgHotel']['tmp_name'];
                                    move_uploaded_file($diaChiIMG, $path);
                                    echo    "<script>alert('Chúc mừng bạn đã thêm khách sạn thành công!');
                                                location.href = 'http://localhost/Travel/UIAdmin/Hotel/hotel.php';
                                            </script>";
                                }
                                else
                                    echo "<script>alert('Thêm khách sạn thất bại,vui lòng kiểm tra lại!');</script>";
                            }else {
                                $sql = "INSERT INTO khachsan (tenKhachSan, hinhAnhKS, noiDungKS, soLuongNguoi, ngayNhanPhong, ngayTraPhong, giaPhongKS, banDo, idDiaDiem) 
                                VALUES('$txtNameHotel', '$imgHotel', '$txtInformation', '$txtNumber', '$txtDateStart', '$txtDateEnd', '$txtPrice', '$txtMap', '$txtLocation')";
                                $query = mysqli_query($conn, $sql);
                                if ($query){
                                echo    "<script>alert('Chúc mừng bạn đã thêm khách sạn thành công!');
                                            location.href = 'http://localhost/Travel/UIAdmin/Hotel/hotel.php';
                                        </script>";
                            }
                            else
                                echo "<script>alert('Thêm khách sạn thất bại,vui lòng kiểm tra lại!');</script>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </form>

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
    <script src="../../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../public/js/raphael.min.js"></script>
    <script src="../../public/js/morris.min.js"></script>
    <script src="../../public/js/morris-data.js"></script>

</body>

</html>