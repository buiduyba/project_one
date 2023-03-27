<link rel="stylesheet" href="./../assets/Css/profile.css">
<div id="fb-root"></div>
<div class="container">
    <div class="content padding-container">
        <div class="content-asile">
            <div class="header-asile">
                <img width="35px" style="height:35px;border-radius:30px;margin-right:5px" src="../upload/<?= $user[0]['kh_avatar'] ?>" alt="">
                <div class="header-info-asile">
                    <h4 class="header-info-name"><?= $user[0]['kh_name'] ?> </h4>
                    <a href="" class="header-info-asile-edit"> <i class="fa-solid fa-pen"></i> Sửa thông tin</a>
                </div>
            </div>
            <button class="tablinks active" id="defaultOpen" onclick="openCity(event, 'Info-user')">Thông tin cá
                nhân</button>
            <button class="tablinks" onclick="openCity(event, 'Order')">Đơn hàng</button>
        </div>
        <div class="content-main">
            <div id="Order" class="tabcontent">
                <div class="tabcontent-header">
                    <h3 class="content-item-title">Hoá đơn</h3>
                    <p>Tổng hợp các hoá đơn của bạn</p>
                </div>
                <table class="table-order" border="1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Người nhận</th>
                            <th>Ngày mua</th>
                            <th>Số SP</th>
                            <th>Thành tiền</th>
                            <th>Trạng thái</th>
                            <th>Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 1;
                        $total = 0;
                        foreach ($order as $item) {
                            $total += (int)$item['sp_price'] * (int)$item['sp_quantity']; ?>
                            <tr>
                                <td><?= $index++ ?></td>
                                <td><?= $item['kh_name'] ?></td>
                                <td>
                                    <?= $item['date'] ?>
                                </td>
                                <td><?= $item['sp_quantity'] ?></td>
                                <td name="thanhtien"><?= number_format((int)$item['sp_price'] * (int)$item['sp_quantity'], 0, ",", ".") ?>đ</td>
                                <td>
                                    <?php
                                    $status = $item['status'];
                                    if ($status == 0) {
                                        echo "Đang chờ duyệt";
                                    }else if($status == 1){
                                        echo "Chưa thanh toán";
                                    }else if($status == 2){
                                        echo "Đang giao hàng";
                                    }else if($status == 3){
                                        echo "Đã thanh toán";
                                    }else if($status == 4){
                                        echo "Đã hoàn thành";
                                    }
                                    ?>
                                    <!-- <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option> -->
                                </td>
                                </td>
                                <td>
                                    <a href="index.php?url=hd_chitiet&id=<?= $item['hd_id'] ?>"><button class="btn-detail tablinks">Chi tiết</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h4 class="money-total">Tổng tiền: <?= number_format($total, 0, ",", ".") ?>đ</h4>
            </div>
            <div id="Info-user" class="tabcontent">
                <div class="tabcontent-header">
                    <h3 class="content-item-title">Thông tin cá nhân</h3>
                    <p>Thông tin cá nhân của bạn</p>
                </div>
                <form class="form-edit-info-user" action="index.php?url=infor-edit-save" method="POST" enctype='multipart/form-data'>
                    <div class="form-grid-input">
                        <div class="list-input-info">
                            <input type="text" hidden name="kh_id" value="<?= $user[0]["kh_id"] ?>">
                            <div>
                                <input type="text" class="input-contact" placeholder="Tên của bạn" value="<?= $user[0]["kh_name"] ?>" name="kh_name">
                                <p class="text-danger"><?= !empty($errorName) ? $errorName : ''  ?></p>
                            </div>
                            <div>
                                <input type="text" class="input-contact" placeholder="Email của bạn" value="<?= $user[0]["kh_email"] ?>" name="kh_email">
                                <p class="text-danger"><?= !empty($errorEmail) ? $errorEmail : ''  ?></p>
                            </div>
                            <div>
                                <input type="password" class="input-contact" placeholder="Password của bạn" name="kh_pass">
                                <p class="text-danger"><?= !empty($errorPass) ? $errorPass : ''  ?></p>
                            </div>
                            <div>
                                <input type="text" class="input-contact" placeholder="Địa chỉ của bạn " value="<?= $user[0]["kh_address"] ?>">
                                <p class="text-danger"><?= !empty($errorAddress) ? $errorAddress : ''  ?></p>
                            </div>
                            <div>
                                <input type="text" class="input-contact" placeholder="Số điện thoại của bạn" value="<?= $user[0]["kh_phone"] ?>" name="kh_phone">
                                <p class="text-danger"><?= !empty($errorPhone) ? $errorPhone : ''  ?></p>
                            </div>
                        </div>
                        <div class="wrapper-image">
                            <div class="imgae-box">
                                <img src="../upload/<?= $user[0]['kh_avatar'] ?>" alt="">
                            </div>
                            <br>
                            <div class="">

                                <input type="file" accept="image/*" id="imgInp" class="form-control" value="<?= $user[0]["kh_avatar"] ?>" name="kh_avatar" id="exampleInputPassword1">
                                <p class="text-danger"><?= !empty($errorImage) ? $errorImage : ''  ?></p>
                                <input type="text" class="form-control" hidden value="<?= $user[0]["kh_avatar"] ?>" name="kh_avatar" id="exampleInputPassword1">
                            </div>
                            <p class="file-name-note">Lưu ý : Chọn ảnh jpg , png </p>
                        </div>
                    </div>
                    <button class="btn-change-info" type="submit">Lưu thay đổi</button>
                </form>
            </div>
            <!-- <div id="Other" class="tabcontent">
                <div class="tabcontent-header">
                    <h3 class="content-item-title">Chi tiết đơn hàng</h3>
                    <p>Chi tiết từng đơn hàng của bạn</p>
                </div>
                <h3>Thông tin :</h3>
                <ul class="list-info-user">
                    <li>Name : <span><td><?= $item['kh_name'] ?></td></span></li>
                    <li>Email : <span><td><?= $item['kh_email'] ?></td></span></li>
                    <li>Địa chỉ : <span><td><?= $item['kh_address'] ?></td></span></li>
                    <li>Số điện thoại : <span><td><?= $item['kh_phone'] ?></td></span></li>
                </ul>
                <table class="table-order" border="1">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá tiền</th>
                            <th>Thành tiền</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $index = 1;
                    $total = 0;
                    foreach ($orderDetail as $item) {
                        $total += (int)$item['sp_price'] * (int)$item['sp_quantity']; ?>
                        <tr>
                            <td><?= $index++ ?></td>
                            <td>
                                <div class="td-product">
                                    <img src="<?= $item['sp_image'] ?>" alt="">
                                    <div class="order-product">
                                        <span class="name"><?= $item['sp_name'] ?></span>
                                        <br>
                                    </div>
                                </div>

                            </td>
                            <td><?= $item['sp_quantity'] ?></td>
                            <td><?= $item['sp_price'] ?></td>
                            <td name="thanhtien"><?= number_format((int)$item['sp_price'] * (int)$item['sp_quantity'], 0, ",", ".") ?>đ</td>
                            <td>
                                <button class="btn-delete-product"><i class="fa-solid fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h3 class="money-total">Tổng tiền: <span><?= number_format($total, 0, ",", ".") ?></span></h3>
            </div> -->
        </div>
    </div>

</div>
<div id="backTop">
    <i class="fa-solid fa-caret-up"></i>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="./../assets/js/tab.js"></script>