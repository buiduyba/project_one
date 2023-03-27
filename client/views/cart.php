<link rel="stylesheet" href="./../assets/Css/Cart.css">
<div class="content padding-container text-center" style="padding-bottom: 40px">
    <h3 class="title-page-name commom-title text-center">Giỏ hàng </h3>
    <p class="text-center color-text"> Giỏ hàng của bạn , hãy chọn những thứ mình muốn </p>
    <p class="message"></p>
    <div class="cart-box">
        <div class="">
            <table class="table">
                <thead>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                    <th>Xoá</th>
                </thead>
                <tbody>
                    <?php $index = 1;
                    $total = 0;
                    foreach ($cart as $key => $value) {
                        $total += (int)$value['price'] * (int)$value['number'];  ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td class="cart_name-box">
                                <img class="cart_img" src="./../upload/<?= $value["img"] ?>" alt="">
                                <div class="product_cart-info-rigth">
                                    <p style="font-weight: bold"><a class="product_name" href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"><?= $value["name"] ?></a> </p>
                                    <span style="display: block; text-align: left;"><?= $value["size"] ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="number-input">
                                    <button onclick="stepDown(<?= $index ?> ,  <?= $value['id'] ?> )" class="minus change-quantity"><i class="fa-solid fa-minus"></i></button>
                                    <input class="quantity-<?= $index ?>" min="0" name="quantity" value="<?= $value['number'] ?>" type="number">
                                    <button onclick="stepUp(<?= $index ?> ,  <?= $value['id'] ?> , <?= $value['current-quantity'] ?>)" class="plus change-quantity"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </td>
                            <td> <?= number_format((int)$value['price'], 0, ",", ".") ?>đ</td>
                            <td> <?= number_format((int)$value['price'] * (int)$value['number'], 0, ",", ".") ?>đ</td>
                            <td>
                                <a href="index.php?url=xoa-gio-hang&id=<?= $value["id"] ?>" class="btn-delete-cart"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
            <div class="btn-table-footer">
                <button class="btn-footer btn-continue-now"><a href="index.php?url=san-pham"><i class="fa-solid fa-arrow-left"></i> Tiếp tục
                        mua hàng</a></button>
                <button class="btn-footer btn-update-cart" style="color: white; cursor: pointer;">Cập nhật giỏ hàng</button>
            </div>
        </div>
        <div class="total-money">
            <h3 class="plus-cart">Cộng giỏ hàng</h3>
            <div class="plus-cart-provisional">
                <h4>Tạm tính</h4>
                <h5><?= number_format($total, 0, ",", ".") ?>đ</h5>
            </div>
            <div class="plus-cart-provisional">
                <h3 class="total-name">Tổng tiền</h3>
                <h4 class="total-price"><?= number_format($total, 0, ",", ".") ?>đ</h4>
            </div>
            <div class="">
                <div class="plus-cart-provisional">
                    <button href="" class="btn-check-out"><a href="index.php?url=thanh-toan">Tiến hành thanh toán</a></button> </br>
                </div>
                
            </div>
        </div>

    </div>
</div>
<script src="./../assets/js/cart.js"></script>
<script>





</script>