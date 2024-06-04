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
          <h1>Quản lý chức vụ</h1>
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
              <h3 class="card-title">Danh sách chức vụ</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên chức vụ</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                  </tr>
                  <?php
                  foreach ($list_chuc_vu as $list) {
                    extract($list);
                    if ($trang_thai == 0) {
                      $trang_thai = "đang hoạt động";
                    } else {
                      $trang_thai = "dừng hoạt động";
                    }
                    $suacv = "index.php?act=suacv&id=" . $id;
                    $xoacv = "index.php?act=xoacv&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_chuc_vu . '</td>
                    <td>' . $mo_ta . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>
                    <a href="' . $suacv . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoacv . '"><input type="button" class="button" value="Xóa"></a>
                    </td>
                </tr>';
                  }
                  ?>

                </thead>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
            </div>
            <a href="index.php?act=formaddcv" class="button">Thêm chức vụ</a>
            <!-- /.card -->
          </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->