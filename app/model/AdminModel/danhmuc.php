<?php
// lấy tất cả danh mục
function loadAll_danh_muc()
{
    $sql = "SELECT * FROM danh_muc order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// thêm danh mục
function insert_danh_muc($tendm, $mota, $anh)
{
    $sql = "INSERT INTO danh_muc(id, ten_danh_muc,mo_ta,img) VALUES(NULL, '$tendm', '$mota','$anh')";
    pdo_execute($sql);
}
// lấy 1 danh mục theo id
function loadOne_danh_muc($id)
{
    $sql = "SELECT * FROM danh_muc where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// hàm sửadanh mục theo id
function update_danh_muc($id, $tendm, $mota,$trangthai, $anh)
{
    $sql = "UPDATE danh_muc SET ten_danh_muc = '$tendm', mo_ta = '$mota',  trang_thai = '$trangthai', img = '$anh'  Where id ='$id'";
    pdo_execute($sql);
}
// hàm xóa danh mục
function delete_danh_muc($id){
    $sql = "DELETE FROM danh_muc Where id ='$id'";
    pdo_execute($sql);
}
