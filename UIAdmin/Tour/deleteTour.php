<?php
    include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_GET['idTour'])){
        $idTour = $_GET['idTour'];
        $sql = "DELETE FROM tour WHERE idTour = $idTour";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo    "<script>alert('Bạn đã xóa tour thành công!')
                        location.href = 'http://localhost/Travel/UIAdmin/Tour/tour.php';
                    </script>";
        }else{
            echo "<script>('Xóa tour thất bại!')</script>";
        }                
    }
?>