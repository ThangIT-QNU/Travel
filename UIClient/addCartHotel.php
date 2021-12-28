<?php 
    session_start();

    if(!isset($_SESSION['taiKhoan'])) 
      echo "<script> 
              alert('Vui lòng đăng nhập để book khách sạn!');
              location.href = 'http://localhost/Travel/UIClient/login.php';
            </script>";
            
    if (!isset($_SESSION['numberHotel'])) {
        $_SESSION['numberHotel'] = 0;
      }
    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if (isset($_GET['idKhachSan'])) {
      
      $idKhachSan = $_GET['idKhachSan'];
      $sql = "SELECT * FROM khachsan where idKhachSan =".$idKhachSan;
      $result = mysqli_query($conn,$sql);

      $row = mysqli_fetch_array($result,1);
      if (mysqli_num_rows($result)>0) {
        if (isset($_SESSION['cartHotel'])) {
          if (isset($_SESSION['cartHotel'][$idKhachSan])) {
            $_SESSION['cartHotel'][$idKhachSan]['countHotel'] +=1;
            $_SESSION['numberHotel'] +=1 ;
          }else{
            $_SESSION['cartHotel'][$idKhachSan]['countHotel'] =1;
            $_SESSION['numberHotel'] +=1 ;
          }
          $_SESSION['cartHotel'][$idKhachSan]['imgHotel'] = $row['hinhAnhKS'];
          $_SESSION['cartHotel'][$idKhachSan]['nameHotel'] = $row['tenKhachSan'];
          $_SESSION['cartHotel'][$idKhachSan]['dateStart'] = $row['ngayNhanPhong'];
          $_SESSION['cartHotel'][$idKhachSan]['dateEnd'] = $row['ngayTraPhong'];
          $_SESSION['cartHotel'][$idKhachSan]['costHotel'] = $row['giaPhongKS'];
              echo    "<script> 
                            alert('Chúc mừng Quý khách đã thêm thành công một khách sạn');
                            location.href = 'http://localhost/Travel/UIClient/cartHotel.php';
                        </script>";
        }else{
          $_SESSION['cartHotel'][$idKhachSan]['countHotel'] =1;
          $_SESSION['numberHotel'] +=1 ;
          $_SESSION['cartHotel'][$idKhachSan]['imgHotel'] = $row['hinhAnhKS'];
          $_SESSION['cartHotel'][$idKhachSan]['nameHotel'] = $row['tenKhachSan'];
          $_SESSION['cartHotel'][$idKhachSan]['dateStart'] = $row['ngayNhanPhong'];
          $_SESSION['cartHotel'][$idKhachSan]['dateEnd'] = $row['ngayTraPhong'];
          $_SESSION['cartHotel'][$idKhachSan]['costHotel'] = $row['giaPhongKS'];
          echo    "<script> 
                        alert('Chúc mừng Quý khách đã thêm thành công một khách sạn');
                        location.href = 'http://localhost/Travel/UIClient/cartHotel.php';
                  </script>";
        }
      }
    }

 ?>