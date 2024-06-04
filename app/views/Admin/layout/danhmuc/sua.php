<?php
if(is_array($one_danh_muc)){
  extract($one_danh_muc);
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
        <h3 class="card-title">Sửa danh mục</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" name="tendm" id="exampleInputEmail1" value="<?php echo $ten_danh_muc ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả</label>
                <input type="text" class="form-control" name="mota" id="exampleInputPassword1" value="<?php echo $mo_ta ?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputFile">IMAGE</label><br>
                <img src="../../img/<?= $img ?>" style="width: 100px;"><br>
                <input type="file" name="img" id="exampleInputPassword1" accept="image/*" ><br><br>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trangthai" id="">
                    <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>hoạt động</option>
                    <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>không hoạt động</option>
                </select> <br><br>
            </div>



            <input type="hidden" name="id" value="<?php echo $id ?>">
        <!-- /.card-body -->

        <div class="card-footer">
            <input type="submit" class="btn btn-primary" name="sua" value="Sửa">
            <a href="index.php?act=listdm"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
    </form>
</div>