<link rel="stylesheet" href="./../assets/Css/contact.css">
<div class="content padding-container">
<div class="content_form  mt-4 mx-4  "   >
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<body>   
        <form action="index.php?url=blog-add-sv" method="POST" >
        <label  class="form-label">Tiêu đề bài viết</label>
            <div class="input__bag">
                <input class="contact__input" type="text" name="tieude" placeholder="Tiêu đề">
            </div>
            <label  class="form-label">Mô tả ngắn</label>
            <div class="input__bag">
                <input class="contact__input" type="text" name="mota" placeholder="Mô tả ngắn">
            </div>
            <div class="mb-3">
                <label  class="form-label">Ảnh</label>
                <input type="file" accept="image/*" id="imgInp" class="form-control" name="anh">
                
            </div>
            <div class="">
                <img width="200px" id="blah"
                    src="https://thaihabooks.com/wp-content/themes/nhasachthaiha/assets/images/default-thumbnail.jpg" >
            </div>
            <label  class="form-label my-4">Nội dung bài viết</label>
            <div class="input__bag">
                <textarea  id="summernote" placeholder="Nội dung" name="noidung" cols="30" rows="10"></textarea>
            </div>
            <button class="pro bg-main">Gửi </button>
        </form>
     <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

    </div>
</div>
</body>