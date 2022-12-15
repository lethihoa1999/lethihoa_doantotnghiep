<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin chi tiết đăng ký</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Tên Vacxin</lable>
                                <select class="form-select edit_form" name="ten_vacxin">
                                <option value="<?php echo $m_manage_register->read_co_so_tiem_id($dang_ky_vacxin->id_quan_ly_vacxin)->id_vacxin ?>"><?php echo $m_manage_register->read_by_id_vacxin($m_manage_register->read_co_so_tiem_id($dang_ky_vacxin->id_quan_ly_vacxin)->id_vacxin)->ten_vacxin; ?></option>
                                    <?php foreach($all_vacxin as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_vacxin ?></option>
                                    <?php }?>
                                </select>
                            </div>

                            <div>
                                <lable>Cơ sở tiêm</lable>
                                <select class="form-select edit_form" name="ten_co_so">
                                <option value="<?php echo $m_manage_register->read_co_so_tiem_id($dang_ky_vacxin->id_quan_ly_vacxin)->id_co_so_tiem ?>"><?php echo $m_manage_register->read_by_id_co_so_tiem($m_manage_register->read_co_so_tiem_id($dang_ky_vacxin->id_quan_ly_vacxin)->id_co_so_tiem)->ten_co_so; ?></option>
                                    <?php foreach($all_facility as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_co_so ?></option>
                                    <?php }?>
                                </select>
                            </div>
                           
                            <div>
                                <lable>Số lượng</lable>
                                <input class="form-control edit_form" name="so_luong" value="<?php echo $dang_ky_vacxin->so_luong ?>">
                            </div>
                            <!-- <div>
                                <lable>Giá tiền</lable>
                                <input name="gia_tien" value="<?php echo $dang_ky_vacxin->gia_tien; ?>">
                            </div> -->
                            <div>
                                <lable>Ngày dự kiến tiêm</lable>
                                <input type="date" class="form-control edit_form" name="ngay_du_kien_tiem" value="<?php echo $dang_ky_vacxin->ngay_du_kien_tiem; ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='manage_register_detail.php?id=<?php echo $dang_ky_vacxin->id_dang_ky_tiem; ?>'>Quay lại</a>
                            </div>
                        </form>

                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
