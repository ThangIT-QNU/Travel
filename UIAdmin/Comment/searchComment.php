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
                    <div class="col-md-12">
                        <div class="col-lg-5">
                            <h1 class="page-header" style="color:blue;"><b>Đánh Giá</b>
                                <a style="width: 110px;" href="http://localhost/Travel/UIAdmin/Account/addAccount.php"
                                    class="btn btn-success"><i class="fas fa-plus-circle"></i>&ensp;Thêm
                                </a>
                            </h1>
                        </div>
                        <div class="col-md-7">
                            <form class="col-md-7 form-inline" style="margin-top:42px; float:right">
                                <input class="form-control mr-sm-2" style="width: 300px;" type="search" name="keySearch"
                                    placeholder="Nhập tên tài khoản khách hàng để tìm kiếm" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                                    name="btnSearch">Search</button>
                            </form>
                            <?php
                            if (isset($_GET['btnSearch'])) {
                                $keySearch = $_GET['keySearch'];
                                header("Location:http://localhost/Travel/UIAdmin/Account/searchAccount.php?key=$keySearch");
                            }
                        ?>
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
                <div style="height:350px" class="col-md-12">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-primary">
                                <th class="text-center">Id</th>
                                <th class="text-center">Họ và tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Tiêu đề</th>
                                <th class="text-center">Nội dung</th>
                                <th class="text-center">Xếp hạng</th>
                                <th class="text-center">Ngày đi</th>
                                <th class="text-center">Đi cùng</th>
                                <th class="text-center">Hình ảnh</th>
                                <th class="text-center">Ngày Đánh Giá</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Tour</th>
                                <th class="text-center">Khách Sạn</th>
                                <th class="text-center" colspan="2">Action</th>
                                <?php
                                    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
                                    if (isset($_GET['key']))
                                        $keySearch = $_GET['key'];
                                    //
                                    $soDongHT = 4;
                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $pageTT = ($page - 1) * $soDongHT;
                                    $allDong = mysqli_query($conn, "SELECT * FROM danhgia WHERE hoVaTen LIKE '%$keySearch%'")->num_rows;
                                    $allPage = ceil($allDong / $soDongHT);
                                    //
                                    $sql = "SELECT * FROM danhgia WHERE hoVaTen LIKE '%$keySearch%' LIMIT $soDongHT OFFSET $pageTT";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = $query->fetch_assoc()) {
                                ?>
                            <tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><?= $row['idDanhGia'] ?></td>
                                <td class="text-center"><?= $row['hoVaTen'] ?></td>
                                <td class="text-center"><?= $row['email'] ?></td>
                                <td class="text-center"><?= $row['tieuDe'] ?></td>
                                <td class="text-center"><?= $row['noiDung'] ?></td>
                                <td class="text-center"><?= $row['sao'] ?> Sao</td>
                                <td class="text-center"><?= $row['ngayDi'] ?></td>
                                <td class="text-center"><?= $row['diVoiAi'] ?></td>
                                <td class="text-center"><?= $row['hinhAnh'] ?></td>
                                <td class="text-center">
                                    <?php
                                        $date = date('d-m-Y- H:i:s',strtotime($row['ngayDanhGia']));
                                        echo $date;
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php 
                                        if($row['trangThai'] == 0){
                                    ?>
                                    <a href="http://localhost/Travel/UIAdmin/Comment/updateComment.php?idDanhGia=<?= $row['idDanhGia'] ?>"
                                        class="btn btn-info"><span class="fas fa-edit"></span>
                                        Xác Nhận</a>
                                    <?php 
                                        }else echo "Đã Xác Nhận"
                                    ?>
                                </td>
                                <td class="align-middle"><?= $row['idTour'] ?></td>
                                <td class="text-center"><?= $row['idKhachSan'] ?></td>
                                <td style="width: 150px;">
                                    <a href="http://localhost/Travel/UIAdmin/Comment/detailComment.php?idDanhGia=<?= $row['idDanhGia'] ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>&nbsp;DETAIL</a>
                                </td>
                                <td style="width: 150px;">
                                    <a href="http://localhost/Travel/UIAdmin/Comment/deleteComment.php?idDanhGia=<?= $row['idDanhGia'] ?>"
                                        onclick="return confirm('Bạn có chắc chắn muốn xoá tài khoản này không?');"
                                        class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>&nbsp;DELETE</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <ul style="margin-left:460px;" class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link"
                            href="http://localhost/Travel/UIAdmin/Comment/searchComment.php?key=<?= $keySearch ?>&page=1">Trang
                            đầu</a>
                    </li>
                    <?php
                        for ($num = 1; $num <= $allPage; $num++) {
                            if ($num != $page) {
                                if ($num > $page - 2 && $num < $page + 2) {
                    ?>
                    <li class="page-item"><a class="page-link"
                            href="http://localhost/Travel/UIAdmin/Comment/searchComment.php?key=<?= $keySearch ?>&page=<?= $num ?>"><?= $num ?></a>
                    </li>
                    <?php
                        }
                    } else {
                        ?>
                    <li class="page-item active"><a class="page-link"
                            href="http://localhost/Travel/UIAdmin/Comment/searchComment.php?key=<?= $keySearch ?>&page=<?= $num ?>"><?= $num ?></a>
                    </li>
                    <?php }
                        } ?>
                    <li class="page-item"><a class="page-link"
                            href="http://localhost/Travel/UIAdmin/Comment/searchComment.php?key=<?= $keySearch ?>&page=<?= $allPage ?>">Trang
                            cuối</a></li>
                </ul>
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