<?php
// load tất cả chức vụ
function loadAll_chuc_vu()
{
    $sql = "SELECT * FROM chuc_vu order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// thêm chức vụ
function insert_chuc_vu($tencv, $mota, $trangthai)
{
    $sql = "INSERT INTO chuc_vu(ten_chuc_vu, mo_ta) VALUES('$tencv', '$mota', '$trangthai')";
    pdo_execute($sql);
}
// lấy 1 chức vụ theo id
function loadOne_chuc_vu($id)
{
    $sql = "SELECT * FROM chuc_vu where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// hàm sửa bài viết theo id
function update_chuc_vu($id, $tencv, $mota, $trangthai)
{
    $sql = "UPDATE chuc_vu SET ten_chuc_vu = '$tencv', mo_ta = '$mota', trang_thai = '$trangthai' Where id ='$id'";
    pdo_execute($sql);
}
// hàm xóa bài viết
function delete_chuc_vu($id){
    $sql = "DELETE FROM chuc_vu Where id ='$id'";
    pdo_execute($sql);
}

?>