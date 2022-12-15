<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm thông tin chi tiết khách hàng</h3>
                        </div>
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST">

                            <div>
                                <lable>Cơ sở tiêm</lable>
                                <select name="ten_co_so">
                                    <option>---Chọn---</option>
                                    <?php foreach($all_facility as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_co_so ?></option>
                                    <?php }?>
                                </select>
                            </div>  
                            <div>
                                <lable>Tên vacxin tiêm</lable>
                                <select name="ten_vacxin">
                                    <option>---Chọn---</option>
                                    <?php foreach($all_vacxin as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_vacxin ?></option>
                                    <?php }?>
                                </select>
                            </div>    
                                                
                            <div>
                                <lable>Ngày tiêm</lable>
                                <input type="date" name="ngay_tiem">
                            </div>
                            <div>
                                <lable>Trạng thái thanh toán</lable>
                                <select name="trang_thai_thanh_toan">
                                    <option value="0">Chưa thanh toán</option>
                                    <option value="1">Đã thanh toán</option>
                                    <option value="2">Hoàn tiền</option>
                                    <option value="3">Đã hoàn tiền</option>
                                </select>
                            </div>
                            <button type="submit" name="btnsubmit">Thêm</button> <a class="btn btn-dangerous" href='manage_customer_detail.php?id=<?php echo $_SESSION['kh']; ?>'>Quay lại</a>
                        </form>

                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
