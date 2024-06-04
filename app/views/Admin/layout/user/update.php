<style>
  a button[type="submit"] {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
  }

  a button[type="submit"]:hover {
    cursor: pointer;
    background-color: red;
  }

  input {
    width: 100%;
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý người dùng</h1>
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
              <h3 class="card-title">sửa thông tin người dùng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <?php
                  if (is_array($nguoidung)) {
                    extract($nguoidung);
                  }
                  ?>
                  <form action="index.php?act=updatend" method="POST">
                      Chức vụ:
                      <select name="role">
                        <?php foreach ($list_chuc_vu as $list) {
                          //extract($list);
                          if ($chuc_vu == $list['id']) {
                            echo ' <option value="' . $list['id'] . '" selected>' . $list['ten_chuc_vu'] . '</option>';
                          } else {
                            echo ' <option value="' . $list['id'] . '">' . $list['ten_chuc_vu'] . '</option>';
                          }
                        } ?>
                      </select><br><br>
                      Trạng thái:
                      <select name="status" id="">
                        <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>hoạt động</option>
                        <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>không hoạt động</option>
                      </select> <br><br>
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <input type="submit" name="sua" value="Cập nhật">
                      <?php
                      if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                      ?>
                  </form>

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