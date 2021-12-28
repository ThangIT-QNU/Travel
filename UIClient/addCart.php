<?php 
    session_start();

    if(!isset($_SESSION['taiKhoan'])) 
      echo "<script> 
              alert('Vui lòng đăng nhập để book tour!');
              location.href = 'http://localhost/Travel/UIClient/login.php';
            </script>";
            
    if (!isset($_SESSION['number'])) {
        $_SESSION['number'] = 0;
      }
    include ('/xampp/htdocs/Travel/DBConnect/DBConnect.php');
    if (isset($_GET['idTour'])) {
      
      $idTour = $_GET['idTour'];
      $sql = "SELECT * FROM tour where idTour =".$idTour;
      $result = mysqli_query($conn,$sql);

      $row = mysqli_fetch_array($result,1);
      if (mysqli_num_rows($result)>0) {
        if (isset($_SESSION['cart'])) {
          if (isset($_SESSION['cart'][$idTour])) {
            $_SESSION['cart'][$idTour]['count'] +=1;
            $_SESSION['number'] +=1 ;
          }else{
            $_SESSION['cart'][$idTour]['count'] =1;
            $_SESSION['number'] +=1 ;
          }
            $_SESSION['cart'][$idTour]['img'] = $row['hinhAnhTour'];
            $_SESSION['cart'][$idTour]['name'] = $row['tenTour'];
            $_SESSION['cart'][$idTour]['date'] = $row['ngayKhoiHanhTour'];
            $_SESSION['cart'][$idTour]['cost'] = $row['giaTour'];
              echo    "<script> 
                            alert('Chúc mừng Quý khách đã thêm thành công một tour vào giỏ hàng');
                            location.href = 'http://localhost/Travel/UIClient/cart.php';
                        </script>";
        }else{
          $_SESSION['cart'][$idTour]['count'] =1;
          $_SESSION['number'] +=1 ;
          $_SESSION['cart'][$idTour]['img'] = $row['hinhAnhTour'];
          $_SESSION['cart'][$idTour]['name'] = $row['tenTour'];
          $_SESSION['cart'][$idTour]['date'] = $row['ngayKhoiHanhTour'];
          $_SESSION['cart'][$idTour]['cost'] = $row['giaTour'];
          echo    "<script> 
                      alert('Chúc mừng Quý khách đã thêm thành công một tour vào giỏ hàng');
                      location.href = 'http://localhost/Travel/UIClient/cart.php';
                  </script>";
        }
      }
    }

 ?>