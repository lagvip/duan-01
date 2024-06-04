<style>
 .button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
  }

 .button:hover {
    cursor: pointer;
    background-color: red;
  }
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý hóa đơn</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách hóa đơn</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tên người nhận</th>
                    <th>SĐT người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Phương thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php
                  foreach ($list_hoa_don as $list) {
                    extract($list);
                    if($trang_thai == 0){
                      $trangthai = "Chờ xác nhận";
                    }else if($trang_thai == 1){
                      $trangthai = "Đã xác nhận";
                    }elseif($trang_thai == 2){
                      $trangthai = "Đang giao hàng";
                    }elseif($trang_thai == 3){
                      $trangthai = "Đã giao hàng";
                    }elseif($trang_thai == 4){
                      $trangthai = "Giao thành công";
                    }else{
                      $trangthai = "Đã hủy";
                    }
                    if($pt_thanh_toan == 1){
                      $pttt = "Thanh toán khi nhận hàng";
                    }
                    $hdct = "index.php?act=listhdct&id=" . $id;
                    $xoahd = "index.php?act=xoahd&id=" . $id;
                    $suahd = "index.php?act=suahd&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_nguoi_nhan . '</td>
                    <td>' . $sdt_nguoi_nhan . '</td>
                    <td>' . $dia_chi_nguoi_nhan . '</td>
                    <td>' . $ngay_dat_hang . '</td>
                    <td>' . $tong_tien . '</td>
                    <td>' . $pttt . '</td>
                    <td>' . $trangthai . '</td>
                    <td>
                    <a href="' . $hdct . '"><input type="button" class="button" value="hóa đơn chi tiết"></a>  
                    <a href="' . $suahd . '"><input type="button" class="button" value="Cập nhật trạng thái"></a>  
                    <a href="' . $xoahd . '"><input type="button" class="button" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  ?>

                </thead>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->