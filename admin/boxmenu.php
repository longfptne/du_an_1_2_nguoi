<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script defer src="assets/css/scripts.js"></script>

  <title>Document</title>
</head>

<body>
  <div class="container-fluid main-page">
    <div class="app-main">
      <nav class="sidebar bg-primary">
        <ul>
          <a href="../index.php">home</a>
          <li>
            <a href="index.php?act=ds"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
          </li>
          <li class="li-side-bar">
            <a href="#" class="a-side-bar" onclick="toggleSubMenu(event)">
              <div>
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Đơn hàng</span>
              </div>
              <i class="fa-solid fa-chevron-down d-none"></i>
              <i class="fa-solid fa-chevron-left"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="index.php?act=order">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Quản lý đơn hàng</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="li-side-bar">
            <a href="#" class="a-side-bar" onclick="toggleSubMenu(event)">
              <div>
                <i class="fa-solid fa-list"></i>
                <span>Danh mục</span>
              </div>
              <i class="fa-solid fa-chevron-down d-none"></i>
              <i class="fa-solid fa-chevron-left"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="index.php?act=caterogies">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Quản lý danh mục</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php?act=addDm">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Thêm danh mục</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="li-side-bar">
            <a href="#" class="a-side-bar" onclick="toggleSubMenu(event)">
              <div>
                <i class="fa-solid fa-mug-hot"></i>
                <span>Sản phẩm</span>
              </div>
              <i class="fa-solid fa-chevron-down d-none"></i>
              <i class="fa-solid fa-chevron-left"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="index.php?act=products">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Quản lý sản phẩm</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php?act=addSp">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Thêm sản phẩm</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="li-side-bar">
            <a href="#" class="a-side-bar" onclick="toggleSubMenu(event)">
              <div>
                <i class="fa-solid fa-users"></i>
                <span>Tài khoản</span>
              </div>
              <i class="fa-solid fa-chevron-down d-none"></i>
              <i class="fa-solid fa-chevron-left"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="index.php?act=user">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Quản lý tài khoản</span>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.php?act=updtTk">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Thêm tài khoản</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="li-side-bar">
            <a href="#" class="a-side-bar" onclick="toggleSubMenu(event)">
              <div>
                <i class="fa-solid fa-comment ico-side"></i>
                <span>Bình Luận</span>
              </div>
              <i class="fa-solid fa-chevron-down d-none"></i>
              <i class="fa-solid fa-chevron-left"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="index.php?act=comment">
                  <div>
                    <i class="fa-regular fa-circle"></i>
                    <span>Quản lý bình luận</span>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</body>

</html>
