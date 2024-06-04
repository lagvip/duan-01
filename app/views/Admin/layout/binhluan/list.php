<style>
  a .button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
  }

  a .button:hover {
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
          <h1>Quản lý bình luận</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <h3 class="card-title">Danh sách bình luận</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ID Tài khoản</th>
                    <th>ID Sản phẩm</th>
                    <th>Bình luận</th>
                    <th>Ngày bình luận</th>
                    <th>Điều khiển</th>

                  </tr>
                  <?php foreach ($listBinhluan as $binhluan): ?>
                      <tr>
                          <td><?= $binhluan['id_binhluan'] ?></td>
                          <td><?= $binhluan['id_user'] ?></td>
                          <td><?= $binhluan['id_sanpham'] ?></td>
                          <td><?= $binhluan['content'] ?></td>
                          <td><?= $binhluan['date_comment'] ?></td>
                          <td>
                              <a onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này hay không?')"
                                 href="index.php?act=deletebl&id=<?= $binhluan['id_binhluan'] ?>">
                                  <input type="button" value="Xóa" class="button">
                              </a>

                          </td>
                      </tr>
                  <?php endforeach; ?>


                </thead>

                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->

          </div>

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