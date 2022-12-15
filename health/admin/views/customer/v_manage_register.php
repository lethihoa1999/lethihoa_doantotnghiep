<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Tìm kiếm thông tin</h4>
                        </div>
                        <!-- /.box-header -->
                        <form class="form" action="" method="POST">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Mã đăng ký</label>
                                            <input type="text" name="ma_dang_ky" class="form-control" placeholder="Mã đăng ký">
                                        </div>
                                    </div>                                  
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Họ & Tên</label>
                                            <input type="text" name="ho_ten" class="form-control" placeholder="Họ & tên">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Ngày đăng ký</label>
                                            <input type="date" name="ngay_dang_ky" class="form-control" placeholder="Ngày đăng ký">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="text" name="so_dien_thoai" minlength="4" maxlength="12" class="form-control" placeholder="Số điện thoại">
                                        </div>
                                    </div>                                 
                                    <div class="col-lg-12 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn btn-success me-1 mt-sm-2" style="margin-left: 45%; "></i>Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quản lý thông tin đăng ký</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;" >
                                    <thead>
                                    <tr>
                                        <th>Mã đăng ký</th>
                                        <th>Tên người đăng ký</th>
                                        <th>Số điện thoại</th>
                                        <th>Ngày đăng ký</th>
                                        <th>Chi tiết</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($register as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ma_dang_ky;?></td>
                                            <td><?php echo $value->ho_ten;?></td>
                                            <td><?php echo $value->so_dien_thoai;?></td>
                                            <td><?php $ngay_dang_ky=$value->ngay_dang_ky; echo date("d-m-Y", strtotime($ngay_dang_ky)); ?></td>  
                                            <td style="text-align: center;"><a href="manage_register_detail.php?id=<?php echo $value->id;?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></a></td>
                                            <td style="text-align: center;"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_register.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_register.php?id=<?php echo $value->id;?>' " >Delete</button></td>
                                            <!-- <a href="url_to_delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> -->

                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
