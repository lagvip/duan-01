<?php
function statistical($from, $to, $type = 'DATE')
{
    // Tạo ra một bảng dates
    $sql = "WITH RECURSIVE dates AS (
      SELECT DATE('$from') AS date
      UNION ALL
      SELECT DATE_ADD(date, INTERVAL 1 DAY)
      FROM dates
      WHERE DATE_ADD(date, INTERVAL 1 DAY) <= '$to'
    )
    ";

    $sql .= "SELECT $type(dates.date) AS date, COUNT(hoa_don.id) AS num_bil, SUM(hoa_don.tong_tien) AS revenue
            FROM dates
            LEFT JOIN hoa_don ON DATE(hoa_don.ngay_dat_hang) = DATE(dates.date)
            
            GROUP BY $type(dates.date)";

    return pdo_query($sql);
}
function Sum_total() {
    $sql = "SELECT  SUM(tong_tien) AS doanh_thu FROM hoa_don ";

    return pdo_query($sql);
}
function count_bill() {
    $sql = "SELECT COUNT(*) AS 'count'
    FROM hoa_don_chi_tiet";
    return pdo_query($sql);
}
function count_account() {
    $sql = "SELECT COUNT(*) AS 'count'
        FROM tai_khoan";
    return pdo_query($sql);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đã xác nhận";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Đã giao hàng";
            break;
        case '4':
            $tt = "Giao hàng thành công";
            break;
        case '5':
            $tt = "Đơn hàng đã hủy";
            break;
        default:
            $tt = "đơn hàng mới";
            break;
    }
    return $tt;
}

?>

