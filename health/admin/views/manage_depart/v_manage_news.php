<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Tìm kiếm thông tin</h4>
                        </div>
                        <form class="form" action="" method="POST">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Tên cơ sở tiêm chủng</label>
                                            <input type="text" name="ho_ten" class="form-control" placeholder="Tên cơ sở">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Số Hotline</label>
                                            <input type="text" name="gioi_tinh" class="form-control" placeholder="Số Hotline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" name="ngay_sinh" class="form-control" placeholder="Địa chỉ">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn btn-success me-1 mt-sm-2"></i>Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quản lý tin tức bệnh học</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Hình ảnh</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($manage_news as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ho_ten;?></td>
                                            <!-- <td><?php echo $value->huyet_ap;?></td>
                                            <td><?php echo $value->nhip_tim;?></td>
                                            <td><?php echo $value->nhiet_do;?></td>
                                            <td><?php echo $value->chieu_cao;?></td>
                                            <td><?php echo $value->can_nang;?></td>
                                            <td><?php echo $value->nhom_mau;?></td> -->
                                            <td><?php echo $value->thong_tin_benh;?></td>
                                            <td><?php
                                                if ($value->ngay_kham == NULL) {
                                                    echo "Chưa cập nhật";
                                                } else {
                                                    echo date("d-m-Y", strtotime($value->ngay_kham));
                                                }
                                            ?></td>
                                            <!--                                        <td><button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></button></td>-->
                                            <td><a href="edit_health_record.php?id=<?php echo $value->id;?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-pencil"></i></a></td>
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

