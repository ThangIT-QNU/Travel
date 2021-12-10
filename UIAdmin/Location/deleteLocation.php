<?php
    include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_GET['idDiaDiem'])){
        $idDiaDiem = $_GET['idDiaDiem'];
        $sql = "DELETE FROM diadiem WHERE idDiaDiem = $idDiaDiem";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo    "<script>alert('Bạn đã xóa Location thành công!')
                        location.href = 'http://localhost/Travel/UIAdmin/Location/location.php';
                    </script>";
        }else{
            echo "<script>('Xóa Location thất bại!')</script>";
        }                
    }
?>