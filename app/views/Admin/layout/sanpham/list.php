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
          <h1>Quản lý sản phẩm</h1>
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
              <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="index.php?act=listsp" method="post">
                <input type="text" name="keyword">
                <select name="iddm">
                  <option value="0" selected>Tất cả</option>
                  <?php foreach ($listdmuc as $dm) {
                    extract($dm);
                    echo ' <option value="' . $id . '">' . $ten_danh_muc . '</option>';
                  } ?>
                </select><br>
                <input type="submit" value="Tìm kiếm" name="btn" class="button">
              </form>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Img</th>
                    <th>Mô tả</th>
                    <th>lượt xem</th>
                    <th>danh mục</th>

                  </tr>
                  <?php
                  foreach ($list_san_pham as $list) {
                    extract($list);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $ten_san_pham . '</td>
                    <td>' . $gia . '</td>
                    <td><img src="../../img/' . $img . '" style="width: 100px;"></td>
                    <td>' . $mo_ta . '</td>
                    <td>' . $luot_xem . '</td>
                    <td>' . $ten_danh_muc . '</td>
                    
                    <td>
                    <a href="' . $suasp . '"><input type="button" class="button" value="Sửa"></a>  
                    <a href="' . $xoasp . '"><input type="button" class="button" value="Xóa"></a>
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
          <a href="index.php?act=formaddsp" class="button">Thêm sản phẩm</a>
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