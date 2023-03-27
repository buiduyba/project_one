
        <div class="container mt-4 warper" style="height: 550px ;">
    <div class="d-flex justify-content-between align-items-center">
         <h3>Quản lý sản phẩm</h3>
         <a href="?url=blog-add" class="bg-main">
             Thêm bài viết
         </a>
    </div>
    <table class="table mt-3">
        <thead class="table-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ảnh blog</th>
                <th scope="col text-center" width="80px">Xoá</th>
                <th scope="col text-center" width="80px">Sửa</th>
               
            </tr>
        </thead>
        <tbody>
            <?php 
                        foreach ($listblog as $blog){  ?>
            <tr>
          
              
                 <td><?=$blog['id']?></td>
                 <td><?=$blog['tieude']?></td>
                 <td><?=$blog['mota_ngan']?></td>
                 <td><img width="100px" src="../upload/<?=$blog['image']?>"  alt=""></td>
                 
               
               
          
                 <td>
                    <a onclick="return confirm('Bạn có muốn xoá danh mục này ?')"  href="index.php?url=delete_blog&id=<?=$blog['id']?>"  class="btn btn-danger">Xóa</a>
                 </td>
                 <td>
                    <a  href="index.php?url=blog-edit&id=<?=$blog['id']?>"  class="btn btn-warning">Sửa</a>
                 </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>