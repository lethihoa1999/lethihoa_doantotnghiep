<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Khai báo y tế</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Khai báo y tế</li>
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
                    <h4 class="box-title">Lịch trình di chuyển</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form name="frmadress" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="media align-items-center bg-primary mb-20">
                                            <?php
                                            if ($read_email->hinh_anh == "") { ?>
                                                <img src="public/layout/images/avatar/2.jpg" class="max-w-70" alt="User Avatar" />
                                            <?php } else { ?>
                                                <img src="public/layout/imageinfo/<?php echo $read_email->hinh_anh ?>" class="max-w-70" alt="User Avatar" />
                                                <?php
                                            }
                                            ?>
                                            <div class="media-body">
                                                <p><strong>Người khai báo</strong></p>
                                                <p class="text-white"><?php echo $_SESSION['user'] ?></p>
                                            </div>
                                            <div>
                                                <button type="button" onclick="window.location.href='patient-details.php'" class="btn btn-outline btn-white btn-sm btn-rounded">Chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="box-title">1. Phương tiện di chuyển</h4>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Phương tiện <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="phuong_tien" type="radio" id="radio_1" value="Phương tiện cá nhân" required>
                                                    <label for="radio_1">Phương tiện cá nhân</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="phuong_tien" type="radio" id="radio_2" value="Máy bay" required>
                                                    <label for="radio_2">Máy bay</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="phuong_tien" type="radio" id="radio_3" value="Tàu hỏa" required>
                                                    <label for="radio_3">Tàu hỏa</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="phuong_tien" type="radio" id="radio_4" value="Xe khách" required>
                                                    <label for="radio_4">Xe khách</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="phuong_tien" type="radio" id="radio_5" value="Tàu thuyền" required>
                                                    <label for="radio_5">Tàu thuyền</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <h5>Số hiệu phương tiện <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_xe" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Ngày khởi hành <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="date" name="ngay_di" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="box-title">2. Nơi đi từ</h4>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Tỉnh thành <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="tinh_di" id="select" required class="form-select tinh_di">
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
                                                <select name="quan_di" id="select" required class="form-select quan_di">
                                                    <option value="">--Chọn quận/huyện--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Phường / xã <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="phuong_di" id="select" required class="form-select phuong_di">
                                                    <option value="">--Chọn phường/xã--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Số nhà, phố, tổ dân phố <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="dia_chi_di" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h4 class="box-title">2. Nơi đến</h4>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Tỉnh thành <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="tinh_den" id="select" required class="form-select tinh_den">
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
                                                <select name="quan_den" id="select" required class="form-select quan_den">
                                                    <option value="">--Chọn quận/huyện--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Phường / xã <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="phuong_den" id="select" required class="form-select phuong_den">
                                                    <option value="">--Chọn phường/xã--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Số nhà, phố, tổ dân phố <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="dia_chi_den" class="form-control" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Trong vòng 14 ngày qua, Anh/Chị có đến khu vực tỉnh, thành phố, quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều nơi) <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="cau_hoi_1" type="radio" id="radio_6" value="0" required>
                                                    <label for="radio_6">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="cau_hoi_1" type="radio" id="radio_7" value="1" required>
                                                    <label for="radio_7">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Trong vòng 14 ngày qua, Anh/Chị có thấy xuất hiện ít nhất 1 trong các dấu hiệu: sốt, ho, khó thở, viêm phổi, đau họng, mệt mỏi, thay đổi vị giác không? <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="cau_hoi_2" type="radio" id="radio_8" value="0" required>
                                                    <label for="radio_8">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="cau_hoi_2" type="radio" id="radio_9" value="1" required>
                                                    <label for="radio_9">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>Trong vòng 14 ngày qua, Anh/Chị có tiếp xúc với người nghi ngờ bị bênh Covid-19, người từ nước có dịch bệnh hay người có những dấu hiệu của bênh Covid-19 không? <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="cau_hoi_3" type="radio" id="radio_10" value="0" required>
                                                    <label for="radio_10">Có</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="cau_hoi_3" type="radio" id="radio_11" value="1" required>
                                                    <label for="radio_11">Không</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" name="btnsubmit" class="btn btn-info">Gửi tờ khai</button>
                                        <button type="button" onclick="window.location.href='index.php'" class="btn btn-warning me-1">Cancel</button>
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