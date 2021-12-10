<?php
    include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_GET['idKhachSan'])){
        $idKhachSan = $_GET['idKhachSan'];
        $sql = "DELETE FROM khachsan WHERE idKhachSan = $idKhachSan";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo    "<script>alert('Bạn đã xóa  khách sạn thành công!')
                        location.href = 'http://localhost/Travel/UIAdmin/Hotel/hotel.php';
                    </script>";
        }else{
            echo "<script>('Xóa khách sạn thất bại!')</script>";
        }
                        
    }
?>