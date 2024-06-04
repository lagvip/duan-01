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
              <h3 class="card-title">Danh sách người dùng</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Chức vụ</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php
                  foreach ($listnguoidung as $listuser) {
                    extract($listuser);
                    if($trang_thai == 0){
                      $trangthai = "đang hoạt động";
                    }else{
                      $trangthai = "không hoạt động";

                    }
                    $suauser = "index.php?act=suand&id=" . $id;
                    $xoauser = "index.php?act=xoand&id=" . $id;
                    echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $ten_dang_nhap . '</td>
                                            <td>' . $mat_khau . '</td>
                                            <td>' . $ho_ten . '</td>
                                            <td>' . $ngay_sinh . '</td>
                                            <td>' . $so_dien_thoai . '</td>
                                            <td>' . $email . '</td>
                                            <td>' . $dia_chi . '</td>
                                            <td>' . $ten_chuc_vu . '</td>
                                            <td>' . $trangthai . '</td>
                                            <td> 
                                                 <a href="' . $suauser . '"><input type="button" class="button" value="Phân quyền">   </a>
                                                 <a href="' . $xoauser . '"><input type="button" class="button" value="Xóa">   </a>
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
          <a href="index.php?act=formaddnd"> <button type="submit" name="add" class="button">Thêm user</button> </a>
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