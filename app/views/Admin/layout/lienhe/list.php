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
          <h1>Quản lý liên hệ</h1>
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
              <h3 class="card-title">Danh sách liên hệ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Nội dung</th>
                  </tr>
                  <?php
                  foreach ($list_lien_he as $list) {
                    extract($list);
                    $sualh = "index.php?act=sualh&id=" . $id;
                    $xoalh = "index.php?act=xoalh&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_khach_hang . '</td>
                    <td>' . $so_dien_thoai . '</td>
                    <td>' . $email . '</td>
                    <td>' . $noi_dung . '</td>
                    <td>
                    <a href="' . $sualh . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoalh . '"><input type="button" class="button" value="Xóa"></a>
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