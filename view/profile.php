<div class="layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-3 border black" style="padding: 10px;height:580px">
                <div class="heading_container">
                    <h2>
                        Hồ sơ của tôi
                    </h2>
                </div><br>
                <?php
                $user = SELECT_USERID();
                if (is_array($user)) {
                    extract($user);
                }
                $imgpath = "upload/" . $img;
                //var_dump($user);exit;
                ?>
                <div class="form-group">
                    <label for="">Ảnh đại diện</label><br>
                    <?php if ($img == "") { ?>
                        <img src="upload/dd.jpg" alt="" name="image" style="width: 50px;height: 50px;">
                    <?php } else { ?>
                        <img src="<?= $imgpath ?>" alt="" name="image" style="width: 50px;height: 50px;">
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" readonly class="form-control" value="<?= $name ?>">
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" readonly value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="name">Địa chỉ:</label>
                    <input type="text" class="form-control" readonly value="<?= $address ?>">
                </div>
                <div class="form-group">
                    <label for="name">Số điện thoại:</label>
                    <input type="text" class="form-control" readonly value="<?= $phone ?>">
                </div>
                <a href="index.php?act=updtTk"><input type="button" value="Cập nhật" class="btn btn-primary"></a>
                <a href="index.php?act=out"><input type="button" value="Đăng xuất" class="btn btn-danger"></a>
                <!-- <a href="index.php?act=updtTk"><input type="button" value="đăng nhập admin"  class="btn btn-primary"></a> -->
                <?php
                if ($_SESSION['user']['role'] == 1) {
                    ?>
                    <a href="admin/boxmenu.php" class="btn btn-danger">đăng nhập admin</a>
                    <?php
                }
                ?>

            </div>
            <div class="col-7 ml-5 border black" style="padding: 20px;">
                <div class="heading_container">
                    <h2>
                        Đơn hàng của tôi
                    </h2>
                </div><br>
                <?php
                $i = 1;
                foreach ($eachcart as $cart) {
                    extract($cart);
                    $Pt = $tt = "";

                    if ($trangthai == 1) {
                        $tt = "Đã xác nhận đơn hàng";
                    } elseif ($trangthai == 3) {
                        $tt = "Đã giao xong";
                    } elseif ($trangthai == 0) {
                        $tt = "Chờ xác nhận";
                    } elseif ($trangthai == 2) {
                        $tt = "Đang giao hàng";
                    }
                    if ($pttt == 1) {
                        $Pt = "Thanh toán khi nhận hàng";
                    } elseif ($pttt == 2) {
                        $Pt = "Chuyển khoản";
                    } elseif ($pttt == 3) {
                        $Pt = "Ghi nợ";
                    }
                    $xoa = "index.php?act=xoadh&id=$id";
                    $xacnhan = "index.php?act=xndh&id=$id";
                    ?>
                    <div class="border mb-5" style="padding: 20px;">
                        <div class="form-group">
                            <label for="">Đơn thứ : <?= $i++ ?></label>
                        </div>
                        <div class="form-group">
                            <label for="">Mã đơn hàng</label>
                            <input type="text" class="form-control" readonly value="<?= $id ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Tổng số tiền</label>
                            <input type="text" class="form-control" readonly value="<?= $total ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Phương thức thanh toán</label>
                            <input type="text" class="form-control" readonly value="<?= $Pt ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Trạng thái đơn hàng</label>
                            <input type="text" class="form-control" readonly value="<?= $tt ?>">
                        </div>
                        <a href="index.php?act=ctdh&id=<?= $id ?>"><button class="btn btn-dark">Chi tiết đơn hàng</button></a>
                        <?php if ($trangthai == 0) { ?>
                            <a href="<?= $xoa ?>"><button class="btn btn-danger">Xóa đơn hàng</button></a>
                        <?php } elseif ($trangthai == 2) { ?>
                            <a href="<?= $xacnhan ?>"><button class="btn btn-primary">Tôi đã nhận được hàng</button></a><?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>