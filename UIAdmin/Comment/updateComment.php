<?php
    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    $idDanhGia = $_GET['idDanhGia'];
    $sqlUpdate = "UPDATE danhgia SET trangThai ='1' WHERE idDanhGia = '$idDanhGia'";
    $query = mysqli_query($conn, $sqlUpdate);
    if ($query) {
        echo    "<script> 
                    alert('Xác nhận đánh giá thành công!');
                    location.href = 'http://localhost/Travel/UIAdmin/Comment/comment.php';
                </script>";
    }else{
        echo    "<script>
                    alert('Xác nhận thất bại');
                    location.href = 'http://localhost/Travel/UIAdmin/Comment/comment.php';
                </script>";
    }
?>