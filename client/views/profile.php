<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/Css/base.css">
    <link rel="stylesheet" href="./assets/Css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0"
        nonce="vWDw95v7"></script>
</head>

<body>
    <div id="fb-root"></div>
    <div class="container">
        <header class="header">
            <div class="header-top">
                <p>Trang mua hàng nội thất trực tuyến chính hãng!</p>
            </div>
            <div class="header-main padding-container">
                <div class="header-main_log">
                    <span>Urban Home</span>
                </div>
                <form action="" class="header-search_form-box">
                    <input class="header-search_form-input" type="text" placeholder="Tìm kiếm sản phẩm">
                    <button class="header-search_btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="header-phone header-main_sub">
                    <p><i class="fa-solid icon fa-square-phone"></i></p>
                    <div class="">
                        <span>Hotline:</span>
                        <br>
                        <p>1900.636.099
                        </p>
                    </div>
                </div>
                <div class="header-login  header-main_sub">
                    <p><i class="fa-solid icon fa-user"></i></p>
                    <div class="">
                        <span>Đăng nhập/Đăng ký</span>
                        <br>
                        <p>Tài khoản của tôi <i class="fa-solid fa-caret-down"></i>
                        </p>
                    </div>
                </div>
                <div class="header-cart header-main_sub">
                    <div class="header-icon-cart">
                        <p><i class="fa-solid icon fa-cart-shopping"></i></p>
                        <span>0</span>
                    </div>
                    <div class="">
                        <p>Giỏ hàng
                        </p>
                    </div>
                </div>
            </div>
            <div class="header-menu padding-container">
                <ul class="header-menu_list">
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Trang chủ </a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Giới thiệu</a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Sản phẩm <i
                                class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Product View <i
                                class="fa-solid fa-caret-down"></i></a></li>
                    <li class="header-menu-item"><a href="" class="header-menu-item-link">Liên hệ</a></li>
                </ul>
            </div>
        </header>

        <div class="content padding-container">
            <div class="content-asile">
                <div class="header-asile">
                    <img class="header-asile-img"
                        src="https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg"
                        alt="">
                    <div class="header-info-asile">
                        <h4 class="header-info-name">Nguyen Ngoc Uy</h4>
                        <a href="" class="header-info-asile-edit"> <i class="fa-solid fa-pen"></i> Sửa thông tin</a>
                    </div>
                </div>
                <button class="tablinks active" id="defaultOpen" onclick="openCity(event, 'Info-user')">Thông tin cá
                    nhân</button>
                <button class="tablinks" onclick="openCity(event, 'Order')">Đơn hàng</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Khác</button>
            </div>
            <div class="content-main">
                <div id="Order" class="tabcontent">
                    <div class="tabcontent-header">
                        <h3 class="content-item-title">Hoá đơn</h3>
                        <p>Tổng hợp các hoá đơn của bạn</p>
                    </div>
                    <table class="table-order"  border="1">
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
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nguyen Ngoc Uy
                                </td>
                                <td>
                                    10:10 20/7/2022
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <select class="select-status" name="" width="100%" id="">
                                        <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn-detail">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nguyen Ngoc Uy
                                </td>
                                <td>
                                    10:10 20/7/2022
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <select class="select-status" name="" width="100%" id="">
                                        <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn-detail">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nguyen Ngoc Uy
                                </td>
                                <td>
                                    10:10 20/7/2022
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <select class="select-status" name="" width="100%" id="">
                                        <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn-detail">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nguyen Ngoc Uy
                                </td>
                                <td>
                                    10:10 20/7/2022
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <select class="select-status" name="" width="100%" id="">
                                        <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn-detail">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Nguyen Ngoc Uy
                                </td>
                                <td>
                                    10:10 20/7/2022
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <select class="select-status" name="" width="100%" id="">
                                        <option value="">Đang chờ duyệt</option>
                                        <option value="">Giao hàng</option>
                                        <option value="">Huỷ đơn</option>
                                        <option value="">Đã thanh toán</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn-detail">Chi tiết</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="money-total">Tổng tiền: <span>300000</span></h3>
                </div>
                <div id="Info-user" class="tabcontent">
                    <div class="tabcontent-header">
                        <h3 class="content-item-title">Thông tin cá nhân</h3>
                        <p>Thông tin cá nhân của bạn</p>
                    </div>
                    <form class="form-edit-info-user">
                        <div class="form-grid-input">
                            <div class="list-input-info">
                                <input type="text" class="input-contact" placeholder="Tên của bạn ">
                                <input type="text" class="input-contact" placeholder="Email của bạn">
                                <input type="text" class="input-contact" placeholder="Password của bạn">
                                <input type="text" class="input-contact" placeholder="Địa chỉ của bạn ">
                                <input type="text" class="input-contact" placeholder="Số điện thoại của bạn">
                            </div>
                            <div class="wrapper-image">
                                <div class="imgae-box">
                                    <img src="https://thumbs.dreamstime.com/b/male-avatar-icon-flat-style-male-user-icon-cartoon-man-avatar-hipster-vector-stock-91462914.jpg" alt="">
                                </div>
                                <br>
                               <div class=""> 
                                <label class="file-name" for="file">Chọn ảnh</label>
                                <input hidden id="file"  type="file" ></div>
                                <p class="file-name-note">Lưu ý : Chọn ảnh jpg , png </p>
                            </div>
                        </div>
                        <button class="btn-change-info" type="submit">Lưu thay đổi</button>
                    </form>
                </div>
                <div id="Other" class="tabcontent">
                    <div class="tabcontent-header">
                        <h3 class="content-item-title">Chi tiết đơn hàng</h3>
                        <p>Chi tiết từng đơn hàng của bạn</p>
                    </div>
                    <h3>Thông tin :</h3>
                    <ul class="list-info-user">
                        <li>Name : <span>Nguyen Ngoc Uy</span></li>
                        <li>Email : <span>uynnph15055@fpt.edu.vn</span></li>
                        <li>Địa chỉ : <span> Hương sơn - Mỹ Đức - Hà Nội</span></li>
                        <li>Số điện thoại : <span>0349791128</span></li>
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
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <div class="td-product">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyXFjJ6gEjXYU5U5QfSw2fYZXl68YMf7b6FQ&usqp=CAU"
                                            alt="">
                                        <div class="order-product">
                                            <span class="name">Sản phẩm quạt trần</span>
                                            <br>
                                            <span>Color : red | Loai : to</span>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    150000d
                                </td>
                                <td>
                                    200000d
                                </td>
                                <td>
                                    <button class="btn-delete-product"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="money-total">Tổng tiền: <span>300000</span></h3>
                </div>
            </div>
        </div>

        <footer class="footer">
            <header class="header-footer">
                <h3 class="commom-title text-center">
                    HÃY LIÊN HỆ VỚI CHÚNG TÔI!
                </h3>
                <p class="text-center color-text">Luôn sẵn sáng hỗ trợ và tư vấn cho bạn để có sản phẩm tốt nhất.</p>
                <div class="header-footer-form-box text-center">
                    <input placeholder="Tìm kiếm sản phẩm" class="header-footer-form-input" type="text">
                    <button class="header-footer-form-btn">Gửi</button>
                </div>
            </header>
            <div class="footer-intro-box padding-container">
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
                <div class="footer-intro-item">
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/policy_icon_1.png?v=10" alt="">
                    <div class="footer-intro-item-info">
                        <p>Giao hàng nhanh chóng.</p>

                        <span>Miễn phí với đơn hàng trên 3 triệu.</span>
                    </div>
                </div>
            </div>
            <div class="header-footer_main padding-container">
                <div class="header-footer_description">
                    <h4 class="title-header color-primary">Giới thiệu</h4>
                    <p class="color-text" style="text-align:justify ;">Trang mua sắm trực tuyến nội thất mang phong cách
                        việt, giúp bạn cập nhập và nắm bắt xu hướng mới</p>
                    <img src="https://theme.hstatic.net/1000409762/1000752712/14/logo_bct.png?v=10" alt="">
                </div>
                <div class="header-footer_contact">
                    <h4 class="title-header color-primary">Liên kết</h4>
                    <ul class="header-contact_list">
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tìm kiếm</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Giới thiệu</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Chính sách đổi trả</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Điều khoản dịch vụ</li>
                    </ul>
                </div>
                <div class="header-description color-primary">
                    <h4 class="title-header">Thông tin liên hệ</h4>
                    <ul class="header-contact_list">
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> Tầng 4, tòa nhà Flemington, số
                            182, đường Lê Đại Hành, phường 15, quận 11, Tp. Hồ Chí Minh.</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> 1900.636.099</li>
                        <li class="li color-text"><i class="fa-solid fa-caret-right"></i> hi@haravan.com</li>
                    </ul>
                </div>
                <div class="header-description color-primary">
                    <h4 class="title-header">Fanpage</h4>
                    <div class="fb-page"
                        data-href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                        data-tabs="timeline" data-width="250" data-height="150" data-small-header="false"
                        data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/"
                            class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/Hoa-qu&#x1ea3;-T&#x1ea5;n-T&#xe0;i-107752811511572/">Hoa
                                quả Tấn Tài</a></blockquote>
                    </div>
                </div>
            </div>
            <div class="footer-end">
                <p class="color-text text-center">Copyright © 2022 Urban Home. Powered by Haravan</p>
            </div>
        </footer>
    </div>
    <div id="backTop">
        <i class="fa-solid fa-caret-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/back-top.js">

    </script>
    <script src="assets/js/tab.js"></script>
</body>

</html>