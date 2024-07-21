<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container-fluid main-page">
    <div class="app-main">
      <!-- <nav class="sidebar bg-primary">
          <ul>
            <li>
              <a href="index.html"
                ><i class="fa-solid fa-house ico-side"></i>Dashboards</a
              >
            </li>
            <li>
              <a href="order.html"
                ><i class="fa-solid fa-cart-shopping ico-side"></i>Quản kí đơn
                hàng</a
              >
            </li>
            <li>
              <a href="caterogies.html"
                ><i class="fa-solid fa-folder-open ico-side"></i>Quản lí danh
                muc</a
              >
            </li>
            <li>
              <a href="products.html"
                ><i class="fa-solid fa-mug-hot ico-side"></i>Quản lí sản phẩm</a
              >
            </li>
            <li>A
              <a href="user.html"
                ><i class="fa-solid fa-user ico-side"></i>Quản lí thành viên</a
              >
            </li>
          </ul>
        </nav> -->
      <div class="main-content">
        <h3 class="title-page">Đơn hàng</h3>
        <table id="example" class="table table-striped" style="width: 100%">
          <thead>
            <tr>
              <th></th>
              <th>STT</th>
              <th>ID_CART</th>
              <th>ID_USER</th>
              <th>TÊN NGƯỜI MUA</th>
              <th>TEL</th>
              <th>ADDRESS</th>
              <th>EMAIL</th>
              <th>TOTAL</th>
              <th>PTTT</th>
              <th>TRẠNG THÁI</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($lisCart as $item) {
              extract($item);
              $Pt =$tt= $style="";
              if($pttt == 1){
                $Pt = "Thanh toán khi nhận hàng";
              }elseif($pttt == 2){
                $Pt = "Chuyển khoản";
              }elseif($pttt == 3){
                $Pt = "Ghi nợ";
              }
              if($trangthai == 1){
                $tt = "Đã xác nhận đơn hàng";
                $style = "color:blue";
              }elseif($trangthai == 3){
                $tt = "Đã giao xong";
                $style = "color:green";
              }elseif($trangthai == 0){
                $tt = "Chờ xác nhận";
                $style = "color:red";
              }elseif($trangthai == 2){
                  $tt = "Đang giao hàng";
                  $style = "color:black";
                }
              $sua = "index.php?act=suaDh&id=" . $id;
              echo '<tr>
                    <td><input type="checkbox" class="form-check-input"></td>
                    <td>'.$i++.'</td>
                    <td>'.$id.'</td>
                    <td>' . $id_user . '</td>
                    <td>' . $name . '</td>
                    <td>' . $tel . '</td>
                    <td>' . $address . '</td>
                    <td>' . $email . '</td>
                    <td>' . $total . '</td>
                    <td>'.$Pt.'</td>
                    <td style="'.$style.'">'.$tt.'</td>
                    <td>
                        <a href="' . $sua . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Chi tiết đơn hàng</a>
                    </td></tr>';
            }
            ?>
          </tbody>
   
        </table>
      </div>
    </div>
  </div>
  <script src="assets/js/main.js"></script>
  <!-- <script>
      new DataTable("#example");
    </script> -->
</body>

</html>