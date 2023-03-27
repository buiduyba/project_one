<div class="container mt-4 warper" style="height: 550px ;">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Hóa đơn chi tiết</h3>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
            <h6>Tên người nhận: <?= $order[0]["kh_name"] ?></h6>
        </li>
        <li class="list-group-item">
            <h6>Email : <?= $order[0]["kh_email"] ?></h6>
        </li>
        <li class="list-group-item">
            <h6>Điện thoại : <?= $order[0]["kh_phone"] ?></h6>
        </li>
        <li class="list-group-item">
            <h6>Địa chỉ : <?= $order[0]["kh_address"] ?></h6>
        </li>
    </ul>
    <form action="index.php?url=order-edit-save" method="POST">
        <input type="text" name="id" hidden value="<?= $orderDetail[0]["hd_id"] ?>">
        <select class="form-select" name="status">
            <option value="1" <?= $orderDetail[0]["status"] == 1 ? 'selected' : '' ?>>Chưa thanh toán</option>
            <option value="0" <?= $orderDetail[0]["status"] == 0 ? 'selected' : '' ?>>Đang chờ duyệt</option>
            <option value="2" <?= $orderDetail[0]["status"] == 2 ? 'selected' : '' ?>>Đang giao hàng</option>
            <option value="3" <?= $orderDetail[0]["status"] == 0 ? 'selected' : '' ?>>Đã thanh toán</option>
            <option value="4" <?= $orderDetail[0]["status"] == 0 ? 'selected' : '' ?>>Đã hoàn thành</option>
        </select>
        <button class="btn btn-warning mt-2">Lưu thay đổi</button>
    </form>
    <table class="table mt-3">
        <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
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
                    <td><?= $item['sp_name'] ?></td>
                    <td><img width="70px" src="../upload/<?= $item['sp_image'] ?>" alt=""></td>
                    <td><?= number_format((int)$item['sp_price'], 0, ",", ".") ?>đ</td>
                    <td><?= $item['sp_quantity'] ?></td>
                    <td><?= number_format((int)$item['sp_price'] * (int)$item['sp_quantity'], 0, ",", ".") ?>đ</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h4 style="color: #8E0007">Tổng tiền : <?= number_format($total, 0, ",", ".") ?>đ</h4>
</div>