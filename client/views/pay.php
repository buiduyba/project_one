<link rel="stylesheet" href="./../assets/Css/Pay.css">

<div class="content padding-container text-center">
    <h3 class="title-page-name commom-title text-center">Thanh toán</h3>
    <p class="text-center color-text"> Giỏ hàng của bạn , hãy chọn những thứ mình muốn </p>
    <form class="cart-box" action="index.php?url=luu-thanh-toan" method="POST">
        <div class="">
            <h4 class="title-form">Điền thông tin của bạn</h4>
            <input type="text" hidden value="<?= $user["kh_id"] ?>" name="kh_id">
            <input type="text" value="<?= $user["kh_name"] ?>" name="kh_name" class="input-contact" placeholder="Tên của bạn ">
            <input type="text" value="<?= $user["kh_email"] ?>" name="kh_email" class="input-contact" placeholder="Email của bạn">
            <div class="form-grid-input">
                <input type="text" class="input-contact" name="kh_address" placeholder="Địa chỉ của bạn ">
                <input type="text" class="input-contact" name="kh_phone" value="<?= $user["kh_phone"] ?>" placeholder="Số điện thoại của bạn">
            </div>
            <textarea class="input-contact-textarea" name="kh_content" placeholder="Nội dung" name=""></textarea>
        </div>
        <div class="total-money">
            <div class="">
                <h4 class="title-form-order">Đơn hàng</h4>
                <h3 class="plus-cart">Sản phẩm</h3>
                <?php if (isset($cart)) { ?>
                    <?php $total = 0;
                    foreach ($cart as $key => $value) {
                        $total += (int)$value['price'] * (int)$value['number'] ?>
                        <div class="plus-cart-provisional" style="padding: 10px 0px">
                            <h4><?= $value["name"] ?>(<?= $value["number"] ?>)</h4>
                            <h5><?= number_format((int)$value['price'] * (int)$value['number'], 0, ",", ".") ?>đ</h5>
                        </div>
                    <?php  } ?>
                <?php  } ?>
                <div class="plus-cart-provisional">
                    <h3 class="total-name" style="color: #8E0007">Tổng tiền</h3>
                    <h4 class="total-price"><?= number_format($total, 0, ",", ".") ?></h4>
                </div>
                <p class="order-note">Sau khi quý khách đặt hàng. Chúng tôi sẽ gửi thông tin đơn hàng qua Email và gọi
                    điện xác nhận đơn hàng. Sau đó sẽ tiến hành vận chuyển hàng. Quý khách thanh toán khi nhận được hàng
                </p>
                <button class="btn-check-out">Thanh toán khi nhận hàng</button>
            </div>
        </div>
    </form>
    <div class="" style="text-align: end; padding: 3px 15px 3px 700px; margin-top: 3px;">
        <h3 class="plus-cart">Phương thức thanh toán khác</h3>
        <div class="plus-cart-provisional">
            <form class="" method="POST" enctype="application/x-www-form-urlencoded" action="../../project-one/model/payMomo.php">
                <input type="submit" name="momo" value="Thanh toán Momo QR Code" class="btn-check-out" style="color: white; font-size: 15px; padding: 13px 30px;">
                <input type="text" hidden value="<?= $total ?>" name="amount">
                <button type="submit" hidden>QR Code</button>
            </form>
        </div>
        <div class="plus-cart-provisional">
            <form class="" method="POST" enctype="application/x-www-form-urlencoded" action="../../project-one/model/payMomoATM.php">
                <input type="submit" name="momo" value="Thanh toán Momo ATM" class="btn-check-out" style="color: white; font-size: 15px; padding: 13px 30px;">
                <input type="hidden" value="<?= $total ?>" name="amount">
                <!-- <input type="hidden" value="1" name="status"> -->
                <button type="submit" hidden>ATM</button>
            </form>
        </div>
        
    </div>
</div>