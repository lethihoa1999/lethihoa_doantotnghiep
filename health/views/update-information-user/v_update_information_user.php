<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Sửa thông tin</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Sửa thông tin</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <?php
            include_once ("views/error.php");
            $errorClass = new CError();
            $errorClass->showError($done);
            $errorClass->showError($error);
            //Error::showError($error_1);
            ?>
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Thông tin cá nhân</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" enctype="multipart/form-data" action="">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Họ & Tên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ho_ten" value="<?php echo $read_email->ho_ten;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Ngày sinh <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_sinh" value="<?php echo $read_email->ngay_sinh;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Giới tính <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="gioi_tinh" id="select" required class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="0" <?php if ($read_email->gioi_tinh == 0) echo "selected";?>>Nam</option>
                                                    <option value="1" <?php if ($read_email->gioi_tinh == 1) echo "selected";?>>Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>CMND/CCCD/Hộ chiếu <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="can_cuoc_cong_dan" value="<?php echo $read_email->can_cuoc_cong_dan;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Nghề nghiệp <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="nghe_nghiep" value="<?php echo $read_email->nghe_nghiep;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số điện thoại <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_dien_thoai" value="<?php echo $read_email->so_dien_thoai;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Email <span class="text-danger">*</span></h5>
                                            <input type="email" name="email" value="<?php echo $read_email->email;?>" class="form-control" disabled required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số thẻ BHYT <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_the_bao_hiem" value="<?php echo $read_email->so_the_bao_hiem;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Tỉnh thành <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="tinh" id="select" required class="form-select tinh">
                                                    <option value="">--Chọn tỉnh--</option>
                                                    <?php
                                                    foreach ($m_province as $key) { ?>
                                                        <option value="<?php echo $key->id;?>"><?php echo $key->ten_tinh_thanh_pho;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Quận / huyện <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="quan" id="select" required class="form-select quan">
                                                    <option value="">--Chọn quận/huyện--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Phường / xã <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="phuong" id="select" required class="form-select phuong">
                                                    <option value="">--Chọn phường/xã--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số nhà, phố, tổ dân phố <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="dia_chi" value="<?php echo $read_email->dia_chi;?>" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Quốc tịch <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="quoc_gia" id="select" required class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="0" <?php if ($read_email->quoc_tich == 0) echo "selected";?>>Việt Nam</option>
                                                    <option value="1" <?php if ($read_email->quoc_tich == 1) echo "selected";?>>Quốc gia khác</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Ảnh đại diện <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="hinh_anh" class="form-control mb-25">
                                            </div>
                                            <?php if ($read_email->hinh_anh != "") {?>
                                            <div class="card">
                                                <img class="max-w-350 card-img-top bter-0 btsr-0" src="public/layout/imageinfo/<?php echo $read_email->hinh_anh;?>" alt="Card image cap">
                                            </div>
                                            <?php }?>                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Ghi chú </label>
                                            <textarea rows="5" name="ghi_chu" class="form-control" placeholder="<?php echo $read_email->ghi_chu;?>"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" name="btnupdate" class="btn btn-info">Submit</button>
                                        <button type="button" onclick="window.location.href='patient-details.php'" class="btn btn-warning me-1">Cancel</button>
                                    </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->