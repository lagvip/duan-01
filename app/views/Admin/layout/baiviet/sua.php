<?php
if(is_array($one_bai_viet)){
  extract($one_bai_viet);
}

?>
    <style>
        .card{
            width: 80%;
            margin-left: 17%;
        }
    </style>
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sửa bài viết</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatebv" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề</label>
            <input type="text" class="form-control" name="tieude" id="exampleInputEmail1" value="<?php echo $tieu_de ?>">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nội dung</label>
            <textarea name="noidung" class="form-control" cols="165" id="exampleInputPassword1" rows="10"><?php echo $noi_dung ?></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Ngày đăng</label>
            <input type="text" class="form-control" name="ngaydang" id="exampleInputPassword1" value="<?php echo $ngay_dang ?>">
          </div>
          <div class="form-group">
          <label for="exampleInputFile">Trạng thái</label><br>
          <select name="trangthai" id="">
          <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>hoạt động</option>
          <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>không hoạt động</option>
        </select> <br><br>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
          <a href="index.php?act=listbv"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>