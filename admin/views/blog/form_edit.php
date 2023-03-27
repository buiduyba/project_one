<link rel="stylesheet" href="./../assets/Css/contact.css">
<div class="content padding-container">
<div class="content_form  mt-4 mx-4  ">  
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<body>   
        <form action="index.php?url=blog-add-edit-sv" method="POST" >
        <input type="text" hidden name="id" value="<?=$blog[0]["id"]?>">
        <label  class="form-label">Tiêu đề bài viết</label>
            <div class="input__bag">
                <input class="contact__input" type="text" value="<?=$blog[0]["tieude"]?>" name="tieude" placeholder="Tiêu đề">
            </div>
            <label  class="form-label">Mô tả ngắn</label>
            <div class="input__bag">
                <input class="contact__input" type="text" value="<?=$blog[0]["mota_ngan"]?>" name="mota" placeholder="Tiêu đề">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Ảnh</label>
                <input type="file" accept="image/*"   id="imgInp"  class="form-control"  value="<?=$blog[0]["image"]?>" name="anh"  id="exampleInputPassword1">
                <input type="text" class="form-control" hidden value="<?=$blog[0]["image"]?>"  id="exampleInputPassword1">
                <p class="text-danger"><?= !empty($errorImage) ? $errorImage : ''  ?></p>
                
            </div>
            <div class="">
                <img width="200px" id="blah" src="../upload/<?=$blog[0]["image"]?>" />
            </div>
            <label for="exampleInputPassword1" class="form-label my-4">Nội dung bài viết</label>
            <div class="form-floating my-4">
                    <textarea class="form-control"   name="noidung"  id="summernote"
                        style="height: 420px"><?=$blog[0]["noidung"]?></textarea>
                </div>
            <button class="pro bg-main">Gửi </button>
        </form>
    </div>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  
</div>
</body>