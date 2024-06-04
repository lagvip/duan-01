<?php 
    // lấy tất cả liên hệ
function loadAll_lien_he()
{
    $sql = "SELECT * FROM lien_he order by id desc";
    $list = pdo_query($sql);
    return $list;
}
// hàm xóa liên hệ
function delete_lien_he($id){
    $sql = "DELETE FROM lien_he Where id ='$id'";
    pdo_execute($sql);
}

?>