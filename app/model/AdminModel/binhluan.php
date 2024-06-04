<?php
function load__all__binhluanadmin() {
    $sql = "SELECT * FROM binh_luan ORDER BY id_binhluan DESC";
    return pdo_query($sql);
}
function delete_binhluan($id) {
    $sql = "DELETE FROM binh_luan WHERE id_binhluan = '$id'";
    pdo_execute($sql);
}
?>