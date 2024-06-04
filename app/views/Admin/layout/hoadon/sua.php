<?php
if(is_array($one_hoa_don)){
  extract($one_hoa_don);
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
        <h3 class="card-title">Cập nhật trạng thái</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="index.php?act=updatett" method="POST">
        <div class="card-body">
           <div class="form-group">
            <label for="exampleInputFile">Trạng thái</label>
            <select name="status" id="">
              <?php if($trang_thai ==0){ ?>
          
               
          <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>Chờ xác nhận</option>
          <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>Đã xác nhận</option>
          <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng</option>
          <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng</option>
          <option value="5" <?php echo $trang_thai == 5 ? 'selected' : '' ?>>Hủy đơn hàng</option>
          <?php } elseif($trang_thai ==1){ ?>
          <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>Đã xác nhận</option>
          <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng</option>
          <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng</option>
          <?php } elseif($trang_thai ==2){ ?>
          <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng</option>
          <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng</option>
          <?php } elseif($trang_thai ==3){ ?>
          <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng</option>
    
          <?php }  ?>
        </select> 
          </div> 
          <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        <!-- /.card-body -->
        
        <div class="card-footer">
          <input type="submit" class="btn btn-primary" name="sua" value="Cập nhật trạng thái">
          <a href="index.php?act=listhd"><input type="button" value="Trở về danh sách" class="btn btn-primary"></a>
        </div>
      </form>
    </div>