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
          <h1>Quản lý danh mục</h1>
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
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
              <h3 class="card-title">Danh sách danh mục</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Img</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php
                  foreach ($list_danh_muc as $list) {
                    extract($list);
                    if ($trang_thai == 0) {
                      $trang_thai = "đang hoạt động";
                    } else {
                      $trang_thai = "không hoạt động";
                    }
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_danh_muc . '</td>
                    <td>' . $mo_ta . '</td>
                    <td>' . $trang_thai . '</td>
                    <td><img src="../../img/' . $img . '" style="width: 100px;"></td>
                    <td>
                    <a href="' . $suadm . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoadm . '"><input type="button" class="button" value="Xóa"></a>
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
            <a href="index.php?act=formadddm" class="button">Thêm danh mục mới</a>
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