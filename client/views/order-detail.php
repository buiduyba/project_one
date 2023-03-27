<link rel="stylesheet" href="./../assets/Css/profile.css">
<div id="fb-root"></div>
<div class="container">
    <div class="content padding-container">
        <div class="content-asile">
            <a href="index.php?url=profile"><button class="tablinks">Quay về</button></a>
        </div>
        <div class="content-main">
            <div id="" class="">
                <div class="">
                    <h3 class="content-item-title">Chi tiết đơn hàng</h3>
                    <p>Chi tiết từng đơn hàng của bạn</p>
                </div>
                <h3>Thông tin :</h3>
                <ul class="list-info-user">
                    <li>Name : <span><td><?=$order[0]['kh_name']?></td></span></li>
                    <li>Email : <span><td><?=$order[0]['kh_email']?></td></span></li>
                    <li>Địa chỉ : <span><td><?=$order[0]['kh_address']?></td></span></li>
                    <li>Số điện thoại : <span><td><?=$order[0]['kh_phone']?></td></span></li>
                </ul>
                <table class="table-order" border="1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Thành tiền</th>
                            <!-- <th>Xoá</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $index = 1;
                        $total = 0;
                        foreach ($orderDetail as $item) {   $total+=(int)$item['sp_price'] * (int)$item['sp_quantity']; ?>
                        <tr>
                            <td><?= $index++?></td>
                            <td>
                                <div class="td-product">
                                    <img src="../upload/<?=$item['sp_image']?>" alt="">
                                    <div class="order-product">
                                        <span class="name"><?=$item['sp_name']?></span>
                                        <br>
                                    </div>
                                </div>

                            </td>
                            <td><?=$item['sp_quantity']?></td>
                            <td><?=$item['sp_price']?></td>
                            <td name="thanhtien"><?=number_format((int)$item['sp_price'] * (int)$item['sp_quantity'],0,",",".")?>đ</td>
                            <!-- <td>
                                <button class="btn-delete-product"><i class="fa-solid fa-trash-can"></i></button>
                            </td> -->
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h3 class="money-total">Tổng tiền: <span><?=number_format($total,0,",",".")?></span></h3>
            </div>
        </div>
    </div>

</div>
<div id="backTop">
    <i class="fa-solid fa-caret-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./../assets/js/tab.js"></script>