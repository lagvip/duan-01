<?php
// lấy tất cả bài viết
function loadAll_bai_viet()
{
    $sql = "SELECT * FROM bai_viet order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// thêm bài viết
function insert_bai_viet($tieude, $noidung, $ngaydang)
{
    $sql = "INSERT INTO bai_viet VALUES(NULL, '$tieude', '$noidung', '$ngaydang')";
    pdo_execute($sql);
}
// lấy 1 bài viết theo id
function loadOne_bai_viet($id)
{
    $sql = "SELECT * FROM bai_viet where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// hàm sửa bài viết theo id
function update_bai_viet($id, $tieude, $noidung, $ngaydang, $trangthai)
{
    $sql = "UPDATE bai_viet SET tieu_de = '$tieude', noi_dung = '$noidung', ngay_dang = '$ngaydang', trang_thai = '$trangthai' Where id ='$id'";
    pdo_execute($sql);
}
// hàm xóa bài viết
function delete_bai_viet($id){
    $sql = "DELETE FROM bai_viet Where id ='$id'";
    pdo_execute($sql);
}
