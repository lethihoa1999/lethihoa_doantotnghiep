<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Quản lý hồ sơ sức khỏe</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Quản lý hồ sơ sức khỏe</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

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
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Họ & Tên</label>
                                            <input type="text" name="ho_ten" class="form-control" placeholder="Họ & tên">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-label">Ngày khám</label>
                                            <input class="form-control" name="ngay_kham" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn btn-success me-1 mt-sm-2"></i>Tìm kiếm</button>
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
                            <h3 class="box-title">Quản lý hồ sơ sức khỏe</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Tên Khách hàng</th>
                                        <th>Huyết áp</th>
                                        <th>Nhịp tim</th>
                                        <th>Nhiệt độ</th>
                                        <th>Chiều cao</th>
                                        <th>Cân nặng</th>
                                        <th>Nhóm máu</th>
                                        <th>Thông tin bệnh</th>
                                        <th>Ngày khám</th>
                                        <th>Cập nhật</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($health_record as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ho_ten;?></td>
                                            <td><?php echo $value->huyet_ap;?></td>
                                            <td><?php echo $value->nhip_tim;?></td>
                                            <td><?php echo $value->nhiet_do;?></td>
                                            <td><?php echo $value->chieu_cao;?></td>
                                            <td><?php echo $value->can_nang;?></td>
                                            <td><?php echo $value->nhom_mau;?></td>
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

