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
                            <h1 class="page-header" style="color:blue;"><b>Thêm Location</b>
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
                                <h3>Thêm Location</h3>
                            </div>

                            <div class="panel-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên Địa Điểm:</label>
                                                    <input type="text" placeholder="Vui lòng nhập tên địa điểm"
                                                        name="txtLocation" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Hình Ảnh:</label>
                                                    <input type="file" value="" name="imgLocation" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Giới Thiệu:</label>
                                                    <textarea class="form-control" type="text"
                                                        placeholder="Vui lòng giới thiệu địa điểm.." name="txtIntroduce"
                                                        class="form-control"></textarea>
                                                    <script>
                                                    CKEDITOR.replace('txtIntroduce');
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="btnAdd" value="Thêm" class="form-control btn btn-success">
                </div>
                </form>
                <?php
                        include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                        if (isset($_POST['btnAdd'])) {
                            $txtLocation = $_POST['txtLocation'];
                            $imgLocation = $_FILES['imgLocation']['name'];
                            $txtIntroduce = $_POST['txtIntroduce'];
                            //
                            if ($imgHotel != "") {
                                $sqlUpdate = "INSERT INTO diadiem (tenDiaDiem, hinhAnh, noiDung) 
                                        VALUES('$txtLocation', '$imgLocation', '$txtIntroduce')";
                                $query = mysqli_query($conn, $sqlUpdate);
                                if ($query){
                                    $path = '../../styles/images/' .$_FILES['imgLocation']['name'];
                                    $diaChiIMG = $_FILES['imgLocation']['tmp_name'];
                                    move_uploaded_file($diaChiIMG, $path);
                                    echo    "<script>alert('Chúc mừng bạn đã thêm dia diem thành công!');
                                                location.href = 'http://localhost/Travel/UIAdmin/Location/location.php';
                                            </script>";
                                }
                                else
                                    echo "<script>alert('Thêm dia diem thất bại,vui lòng kiểm tra lại!');</script>";
                            }else {
                                $sql = "INSERT INTO diadiem (tenDiaDiem, hinhAnh, noiDung) 
                                        VALUES('$txtLocation', '$imgLocation', '$txtIntroduce')";
                                $query = mysqli_query($conn, $sql);
                                if ($query){
                                echo    "<script>alert('Chúc mừng bạn đã dia diem thành công!');
                                            location.href = 'http://localhost/Travel/UIAdmin/Location/location.php';
                                        </script>";
                            }
                            else
                                echo "<script>alert('Thêm diadiem thất bại,vui lòng kiểm tra lại!');</script>";
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