<?php
    include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_GET['idLoaiTour'])){
        $idLoaiTour = $_GET['idLoaiTour'];
        $sql = "DELETE FROM loaitour WHERE idLoaiTour = $idLoaiTour";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo    "<script>alert('Bạn đã xóa type tour thành công!')
                        location.href = 'http://localhost/Travel/UIAdmin/TypeTour/typeTour.php';
                    </script>";
        }else{
            echo "<script>('Xóa type tour thất bại!')</script>";
        }                
    }
?>