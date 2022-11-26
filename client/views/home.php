<link rel="stylesheet" href="./../assets/Css/Home.css">
<div class="">
    <img class="w-100" style="height: 600px;object-fit: cover" src="https://intphcm.com/data/upload/banner-thoi-trang-nam.jpg" alt="">
</div>
<div class="banner-sub_box   padding-container" style="z-index: 1">
        <div class="banner-sub_img-box">
            <img class="w-100 h-100 "
                src="https://i.pinimg.com/564x/12/f8/04/12f80419ef4b3b4f32c3965756b14197.jpg"
                alt="">
        </div>
        <div class="banner-sub_img-box">
            <img class="w-100 h-100" src="https://i.pinimg.com/564x/e9/ea/32/e9ea32989cc7dea6d250720a104c271c.jpg" alt="">
        </div>
        <div class="banner-sub_img-box">
                <img  class="w-100 h-100 "
                    src="https://i.pinimg.com/736x/9c/ac/fc/9cacfca0e8e2a9d8d990d5d8ee43850f.jpg"
                alt="">
        </div>
    </div>
<div class="content">
    <h3 class="header-footer-title commom-title text-center">
        Các sản phẩm nổi bật hiện nay
    </h3>
    <p class="text-center color-text">Cập nhật những sản phẩm mới nhật</p>
    <div class="product-list_box padding-container">
    <?php foreach ($products as $item) { ?>
        <div class="product-item">
            <div class="product-item_img-box">
                <a href="index.php?url=san-pham-chi-tiet&id=<?= $item["sp_id"] ?>"> <img class="w-100" src="./../upload/<?=$item["sp_image"]?>" alt=""></a>
                <div class="product-item_percent">
                    <div class="">
                        <h3>SALE</h3>
                    </div>
                    <div class="product-item_phan">
                        <p> <?=ceil(((int)$item["sp_price"] - (int)$item["sp_sale"]) * 100/(int)$item["sp_price"])?>%</p>
                    </div>
                </div>
            </div>
            <a  style="color: black" href="index.php?url=san-pham-chi-tiet&id=<?= (int)$item["sp_id"] ?>">   <p class="product-item_name"><?=$item["sp_name"]?></p></a>
            <div class="product-item_price-wraper">
                <div class="product-price-main">
                    <?=number_format((int)$item['sp_price'],0,",",".")?>đ
                </div>
                <div class="product-price_sale">
                    <?=number_format((int)$item['sp_sale'],0,",",".")?>đ
                </div>
            </div>
        </div>
        <?php  } ?>
    </div>

</div>