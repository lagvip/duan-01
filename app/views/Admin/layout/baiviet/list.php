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
          <h1>Quản lý bài viết</h1>
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
              <h3 class="card-title">Danh sách bài viết</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                  </tr>
                  <?php
                  foreach ($list_bai_viet as $list) {
                    extract($list);
                    if ($trang_thai == 0) {
                      $trang_thai = "đang hoạt động";
                    } else {
                      $trang_thai = "dừng hoạt động";
                    }
                    $suabv = "index.php?act=suabv&id=" . $id;
                    $xoabv = "index.php?act=xoabv&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $tieu_de . '</td>
                    <td>' . $noi_dung . '</td>
                    <td>' . $ngay_dang . '</td>
                    <td>' . $trang_thai . '</td>
                    <td>
                    <a href="' . $suabv . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoabv . '"><input type="button" class="button" value="Xóa"></a>
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
            <a href="index.php?act=formaddbv" class="button">Thêm bài viết</a>
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