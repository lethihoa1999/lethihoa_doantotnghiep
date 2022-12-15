<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Chứng nhận tiêm chủng</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Chứng nhận tiêm chủng</li>
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
                        <div class="box-header no-border">
                            <h4 class="box-title">Giấy xác nhận đã tiêm Vaccin phòng Covid-19</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="box box-widget widget-user-4">
                        <div class="widget-user-header bg-img" style="background: url('public/layout/images/photo1.png');" data-overlay="5">
                            <div class="box-body text-white">
                                <div class="widget-user-image">
                                    <?php
                                    if ($read_email->hinh_anh == "") { ?>
                                        <img src="public/layout/images/avatar/2.jpg" class="rounded-circle bg-success-light" alt="User Avatar" />
                                    <?php } else { ?>
                                        <img src="public/layout/imageinfo/<?php echo $read_email->hinh_anh ?>" class="rounded-circle bg-success-light max-w-1000" alt="User Avatar" />
                                        <?php
                                    }
                                    ?>
                                </div>
                                <h3 class="widget-user-username"><?php echo $read_email->ho_ten;?></h3>
                                <h6 class="widget-user-desc"><?php echo $read_email->nghe_nghiep;?></h6>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <h5>Họ & Tên </h5>
                                        <div class="controls">
                                            <input type="text" name="ho_ten" disabled value="<?php echo $read_email->ho_ten;?>" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <h5>Ngày tháng năm sinh </h5>
                                        <div class="controls">
                                            <input type="date" name="ngay_sinh" disabled value="<?php echo $read_email->ngay_sinh;?>" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <h5>Số điện thoại </h5>
                                        <div class="controls">
                                            <input type="text" name="so_dien_thoai" disabled value="<?php echo $read_email->so_dien_thoai;?>" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <h5>Địa chỉ </h5>
                                        <div class="controls">
                                            <input type="text" name="dia_chi" disabled value="<?php echo $read_email->dia_chi;?>" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Đã được tiêm Vaccin phòng bệnh Covid-19</h4>
                        </div>
                        <div class="box-body">
                            <div id="slimtest7">
                                <div class="box-body">
                                    <div class="row">
                                        <?php $count = 0; foreach ($log_di_chuyen as $key=>$value) {
                                            $count += 1;
                                            ?>
                                            <div class="col-12">
                                                <div class="box">
                                                    <div class="row g-0 py-2">
                                                        <div class="col-12 d-lg-block">
                                                            <div class="box-body be-1 bg-lighter border-light">
                                                                <div class="flexbox align-items-center mb-1">
                                                                    <div class="g-0">
                                                                        <div class="flexbox align-items-center" style="justify-content: flex-start;">
                                                                            <span class="icon-Info-circle fs-30"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                                                            <span>Loại Vaccin: <?php echo $value->loai_vaccin; ?></span>
                                                                        </div>
                                                                        <div class="flexbox align-items-center" style="justify-content: flex-start;">
                                                                            <span class="icon-Info-circle fs-30"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                                                            <span>Nơi tiêm: <?php echo $value->noi_tiem; ?></span>
                                                                        </div>
                                                                        <div class="flexbox align-items-center" style="justify-content: flex-start;">
                                                                            <span class="icon-Info-circle fs-30"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                                                            <span>Ngày tiêm: <span><?php echo date("d-m-Y", strtotime($value->ngay_tiem)); ?></span></span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="text-warning fs-40"><?php echo $count; ?></span>
                                                                </div>
                                                                <div class="progress progress-xxs mt-10 mb-0">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- /.col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->