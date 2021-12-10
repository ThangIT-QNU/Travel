<?php
    include('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if(isset($_GET['taiKhoan'])){
        $taiKhoan = $_GET['taiKhoan'];
        $sql = "DELETE FROM taikhoan WHERE idTaiKhoan = $taiKhoan";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo    "<script>alert('Bạn đã xóa tài khoản thành công!')
                        location.href = 'http://localhost/Travel/UIAdmin/Account/account.php';
                    </script>";
        }else{
            echo "<script>('Xóa tài khoản thất bại!')</script>";
        }
                        
    }
?>