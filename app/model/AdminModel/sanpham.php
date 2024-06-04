<?php
// lấy tất cả sản phẩm
function loadAll_san_pham()
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc order by san_pham.id desc";
    $list = pdo_query($sql);
    return $list;
}
// thêm san phẩm
function insert_san_pham($tensp, $gia, $anh, $mota, $id_danh_muc ,$ram ,$soluong)
{
    $sql = "INSERT INTO san_pham(id, ten_san_pham, gia, img, mo_ta, id_danh_muc) VALUES(NULL, ?, ?, ?, ?, ?)";
    $sql_args = [$tensp, $gia, $anh, $mota, $id_danh_muc];

    $productId = pdo_execute_return_lastInsertID($sql, $sql_args);

    $sqlVariant = "INSERT INTO sanpham_bienthe (id, ram, soluong) VALUES (?, ?, ?)";

    foreach($ram as $index => $rams) {
        $variantArgs = [$productId, $ram[$index], $soluong[$index]];
        pdo_execute_return_lastInsertID($sqlVariant, $variantArgs);
    }
}

// lấy 1 sản phẩm theo id
function loadOne_san_pham($id)
{
    $sql = "SELECT * FROM san_pham where id='$id' ";
    $listOne = pdo_query_one($sql);
    return $listOne;
}
// hàm sửadanh mục theo id
function update_san_pham($id, $tensp, $gia, $anh, $mota , $id_danh_muc ,$ram ,$soluong )
{
    if ($anh != '') {
        $sql = "UPDATE san_pham SET id_danh_muc = '$id_danh_muc', ten_san_pham = '$tensp', gia = '$gia', mo_ta = '$mota', img = '$anh'  Where id ='$id'";
        $sqlDeleteVariants = "DELETE FROM sanpham_bienthe WHERE id = ?";
        pdo_execute($sqlDeleteVariants, $id);

        // Thêm lại biến thể mới cho mỗi size vào bảng product_detail
        $sqlInsertVariant = "INSERT INTO sanpham_bienthe (id, ram, soluong) VALUES (?, ?, ?)";

        foreach($ram as $index => $rams) {
            pdo_execute($sqlInsertVariant, $id, $ram[$index], $soluong[$index]);
        }
    } else {
        $sql = "UPDATE san_pham SET id_danh_muc = '$id_danh_muc', ten_san_pham = '$tensp', gia = '$gia', mo_ta = '$mota' Where id ='$id'";
        $sqlDeleteVariants = "DELETE FROM sanpham_bienthe WHERE id = ?";
        pdo_execute($sqlDeleteVariants, $id);

        // Thêm lại biến thể mới cho mỗi size vào bảng product_detail
        $sqlInsertVariant = "INSERT INTO sanpham_bienthe (id, ram, soluong) VALUES (?, ?, ?)";

        foreach($ram as $index => $rams) {
            pdo_execute($sqlInsertVariant, $id, $ram[$index], $soluong[$index]);
        }
    }
    pdo_execute($sql);
}

function delete_san_pham($id){
    $sqlDeleteProductDetail = "DELETE FROM sanpham_bienthe WHERE id = ?";
    pdo_execute($sqlDeleteProductDetail, $id);
    $sqlDeleteProduct = "DELETE FROM san_pham WHERE id = ?";
    pdo_execute($sqlDeleteProduct, $id);
}
// load sản phẩm theo tên hoặc id danh mục
function loadAll_sanpham($kyw, $iddm)
{
    $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc WHERE 1";
    if ($kyw != '') {
        $sql .= " AND ten_san_pham LIKE '%" . $kyw . "%' ";
    }
    if ($iddm > 0) {
        $sql .= " AND id_danh_muc = '$iddm' ";
    }
    $sql .= " order by san_pham.id desc";
    $listsp = pdo_query($sql);
    return $listsp;
}
// bien the
function load_all_pro_detail($id) {

    $sql = "SELECT * FROM sanpham_bienthe WHERE id = $id";

    return pdo_query($sql);
}
