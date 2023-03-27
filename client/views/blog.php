
<div class="main padding-container">
        <div class="post__list">
        <?php foreach ($listblog as $blog) { ?>
          <div class="post__item">
            <div class="post__item-image--box">
              <a href="index.php?url=blog_chitiet&id=<?= $blog["id"] ?>"
                ><img
                  src="../upload/<?=$blog['image']?>"
                  alt=""
                  class="post__item-image"
              /></a>
            </div>
            <div class="post__item--info">
              <h3 class="post__item--title">
                <a href=""> <?=$blog['tieude']?> </a>
              </h3>
              <p class="post__item--intro text-collapse-row-2">
              <?=$blog['mota_ngan']?>
              </p>
            </div>
          </div>
          <?php  } ?>
        
          <ul class="post__paginate">
            <li class="post__paginate-item"><a href=""><i class="fa-solid fa-chevron-left"></i></a></li>
            <li class="post__paginate-item "><a href="">1</a></li>
            <li class="post__paginate-item"><a class="active" href="">2</a></li>
            <li class="post__paginate-item"><a href="">3</a></li>
            <li class="post__paginate-item"><a href=""><i class="fa-solid fa-chevron-right"></i></a></li>
          </ul>
        </div>
        <div class="aside__list">
          <h3>Bài viết liên quan</h3>
          <div class="post__relate--list">
            <div class="post__relate--item">
                <a href="" class="w-100"><img class="w-100" src="https://qcshop.vn/wp-content/uploads/2022/08/mix-do-don-gian-giay-nike-jordan-cho-nu-240x300.jpg" alt=""></a>
                <div class="post__relate--item-info ">
                    <p class="text-collapse-row-2"> Những đôi giày Nike Jordan hiện đang làm mưa làm gió trong lĩnh
                        vực thời Những đôi giày Nike Jordan hiện đang làm </p>
                </div>
            </div>
            <div class="post__relate--item">
                <a href="" class="w-100"><img class="w-100" src="https://qcshop.vn/wp-content/uploads/2022/08/mix-do-don-gian-giay-nike-jordan-cho-nu-240x300.jpg" alt=""></a>
                <div class="post__relate--item-info ">
                    <p class="text-collapse-row-2"> Những đôi giày Nike Jordan hiện đang làm mưa làm gió trong lĩnh
                        vực thời Những đôi giày Nike Jordan hiện đang làm </p>
                </div>
            </div>
            <div class="post__relate--item">
                <a href="" class="w-100"><img class="w-100" src="https://qcshop.vn/wp-content/uploads/2022/08/mix-do-don-gian-giay-nike-jordan-cho-nu-240x300.jpg" alt=""></a>
                <div class="post__relate--item-info ">
                    <p class="text-collapse-row-2"> Những đôi giày Nike Jordan hiện đang làm mưa làm gió trong lĩnh
vực thời Những đôi giày Nike Jordan hiện đang làm </p>
                </div>
            </div>
            <div class="post__relate--item">
                <a href="" class="w-100"><img class="w-100" src="https://qcshop.vn/wp-content/uploads/2022/08/mix-do-don-gian-giay-nike-jordan-cho-nu-240x300.jpg" alt=""></a>
                <div class="post__relate--item-info ">
                    <p class="text-collapse-row-2"> Những đôi giày Nike Jordan hiện đang làm mưa làm gió trong lĩnh
                        vực thời Những đôi giày Nike Jordan hiện đang làm </p>
                </div>
            </div>
          </div>
        </div>
      </div>