<?php
session_start();
ob_start();
include('./../model/connect.php');
include('./../model/product.php');
include('./../model/order.php');
include('./../model/category.php');
include('./../model/size.php');
include('./../model/user.php');
include('./../helper/baseUrl.php');
include('./../helper/dd.php');

if(isset($_GET['url'])){
    $url = $_GET['url'];
    switch ($url) {
      
            //  Lưu đăng ký
        case 'dang-ky-save':
            if(empty($_POST['kh_name']) || empty($_POST['kh_email']) || empty($_POST['kh_password']) || empty($_POST['kh_password'])){
                echo 'Bạn đang bỏ trống dữ liệu !!!';
            }else{
                if(empty($_FILES["kh_avatar"]['name'])){
                    echo 'Bạn chưa chọn ảnh !!!';
                }else if(!filter_var($_POST['kh_email'], FILTER_VALIDATE_EMAIL)){
                    echo 'Email không đúng định dạng !!!';
                }else if(getUserFind($_POST['kh_email'])){
                    echo 'Tài khoản này đã tồn tại !!!';
                }else if(strlen($_POST['kh_password']) > 20){
                    echo 'Mật khẩu quá dài !!!';
                }else{
                    $fileName =  $_FILES["kh_avatar"]["name"];
                    move_uploaded_file( $_FILES["kh_avatar"]["tmp_name"]  ,'../upload/' .   $fileName );
                    $_POST['kh_avatar'] = $fileName;
                    $_POST['kh_password'] = password_hash( $_POST['kh_password']  , PASSWORD_DEFAULT);
                    try {
                        register($_POST);
                        echo 'success';
                    } catch (\Throwable $th) {
                        echo 'Lỗi không đăng ký được !!!';
                    }
                }
            }
            break;

        // Lưu đăng nhập
        case 'dang-nhap-save':
            if(empty($_POST['email']) || empty($_POST['password'])){
                echo 'Bạn đang bỏ trống dữ liệu !!!';
            }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo 'Email không đúng định dạng !!!';
            }else{
                $isAcountFalse;
                $isAcountTrue = '';
                for ($i=0; $i < count(getAllUser()); $i++) { 
                    if(trim(getAllUser()[$i]["kh_email"]) == trim($_POST["email"])){
                        if(password_verify($_POST["password"] , getAllUser()[$i]["kh_password"])){
                            $_SESSION["user"] = getAllUser()[$i];
                            if (getAllUser()[$i]["role"] == 1) {
                                $isAcountTrue = 'client';
                            }else if(getAllUser()[$i]["role"] == 0){
                                $isAcountTrue = 'admin';
                            }
                        }else{
                            $isAcountFalse = 'Mật khẩu của bạn không chính xác !!!';
                        }
                    }else{
                        $isAcountFalse = 'Tài khoản của bạn không tồn tại !!!';
                    }
                }  
                if($isAcountTrue == 'admin'){
                    echo $isAcountTrue;
                }elseif($isAcountTrue == 'client'){
                    echo $isAcountTrue;
                }else{
                    echo $isAcountFalse;
                }
            }
            break;
        
        // Update giỏ hàng
        case 'update-cart':
            if(isset($_GET["update"])){
               $dataUpdate = json_decode($_GET["update"]);
               foreach ($dataUpdate as $ky => $value) {
                    if (isset($_SESSION["cart"])) {
                        $cart = $_SESSION["cart"];
                        $cart[$value->id]["number"] = (int)$value->quantity;
                        $_SESSION["cart"] = $cart;
                    }
                }  
                echo 'success';
            }
        break;
        
        default:
            # code...
            break;
    }
}
ob_flush();