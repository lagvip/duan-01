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
              <h3 class="card-title">Thêm người dùng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                  <form action="index.php?act=addnd" method="POST">


                    Tên đăng nhập: <br>
                    <input type="text" name="tendangnhap"><br><br>
                    Mật khẩu: <br>
                    <input type="text" name="matkhau"><br><br>
                    Họ tên: <br>
                    <input type="text" name="hoten"><br><br>
                    Ngày sinh: <br>
                    <input type="text" name="ngaysinh"><br><br>
                    Số điện thoại: <br>
                    <input type="text" name="sodienthoai"><br><br>
                    Email: <br>
                    <input type="text" name="email"><br><br>
                    Địa chỉ: <br>
                    <input type="text" name="diachi"><br><br>
                    Chức vụ:
                      <select name="role">
                        <?php foreach ($list_chuc_vu as $list) :
                          extract($list);         ?>          
                          <option value="<?=$id?>" <?php echo ($id == 2) ? "selected" : "" ?> ><?=$ten_chuc_vu?></option>
                        <?php endforeach; ?> 
                      </select><br><br>
                    <input type="submit" name="themnguoidung" value="Thêm người dùng">

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
          <a href="index.php?act=listnd"> <button type="submit">Danh sác người dùng</button> </a>
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