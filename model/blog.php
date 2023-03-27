<?php 

// Gọi tất cả sản phẩm ra ngoài
function loadAllBlog(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT *  FROM blog");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
// Xóa blog
function deleteBlog($id){
    $conn = connect();
    $sql = "DELETE FROM blog WHERE  id=".$id;
    $conn->exec($sql);
}
// Gọi phần tử chỉ định theo id
function blog_detail($id){
    $conn = connect();
    $stmt = $conn->prepare("SELECT  * FROM blog WHERE id = ".$id."");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
//thêm bài viết
function insertblog($data){
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO blog 
    (tieude, image, noidung, mota_ngan)
     VALUES ('".$data["tieude"]."' , '".$data["anh"]."' ,' ".$data["noidung"]."' ,' ".$data["mota"]."')");
    $stmt->execute();
   
}
// Updeta bài viết
function updateblog($data , $id){
    $conn = connect();
    $stmt = $conn->prepare("UPDATE  blog   
    SET tieude= '".$data["tieude"]."', image= '".$data["anh"]."', noidung=' ".$data["noidung"]."'  WHERE blog.id = ".(int)$id." ");
    $stmt->execute();
}

