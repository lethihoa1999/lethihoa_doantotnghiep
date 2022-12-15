<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Thông tin chi tiết</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thông tin chi tiết</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xl-5 col-12">
                    <div class="d-md-flex align-items-center justify-content-between mb-20">
                        <button type="button" onclick="window.location.href='update-information-user.php'" class="btn btn-info"><i class="fad fa-user-edit"></i> Sửa thông tin</button>
                        <a href="change_pass.php" class="btn btn-success"><i class="fad fa-fingerprint"></i> Đổi mật khẩu</a>
                    </div>
                    <div class="box">
                        <div class="box-body text-end min-h-150" style="background-image:url(public/layout/images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                        </div>
                        <div class="box-body wed-up position-relative">
                            <div class="d-md-flex align-items-center">
                                <div class=" me-20 text-center text-md-start">
                                    <?php
                                    if ($read_email->hinh_anh == "") { ?>
                                        <img src="public/layout/images/avatar/2.jpg" class="bg-success-light rounded10" alt="" />
                                    <?php } else { ?>
                                        <img src="public/layout/imageinfo/<?php echo $read_email->hinh_anh ?>" class="bg-success-light rounded10 max-w-170" alt="" />
                                    <?php
                                        }
                                    ?>
                                    <div class="text-center my-10">
                                        <p class="mb-0">Trạng thái:</p>
                                        <h4><?php if ($read_email->trang_thai == 0) {echo "chưa tiêm";} else {echo "Đã tiêm chủng";}?></h4>
                                    </div>
                                </div>
                                <div class="mt-40">
                                    <h4 class="fw-600 mb-5"><?php echo $read_email->ho_ten;?></h4>
                                    <p class="fw-500 mb-5"><?php echo $read_email->nghe_nghiep;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pt-0">
                            <p>Ngày sinh: <span class="text-gray ps-10"><?php echo date("d-m-Y", strtotime($read_email->ngay_sinh));?></span> </p>
                            <p>Giới tính: <span class="text-gray ps-10"><?php if ($read_email->gioi_tinh == 0) {echo "Nam";} else {echo "Nữ";}?></span> </p>
                            <p>Quốc tịch: <span class="text-gray ps-10"><?php if ($read_email->quoc_tich == 0) {echo "Việt Nam";} else {echo "Quốc gia khác";}?></span> </p>
                            <p>Số điện thoại: <span class="text-gray ps-10"><?php echo $read_email->so_dien_thoai;?></span> </p>
                            <p>Email :<span class="text-gray ps-10"><?php echo $read_email->email;?></span> </p>
                            <p>Số căn cước :<span class="text-gray ps-10"><?php echo $read_email->can_cuoc_cong_dan;?></span> </p>
                            <p>Số thẻ bảo hiểm :<span class="text-gray ps-10"><?php echo $read_email->so_the_bao_hiem;?></span> </p>
                            <p>Địa chỉ :<span class="text-gray ps-10"><?php echo $read_email->dia_chi;?></span></p>
                            <p>Ghi chú :<span class="text-gray ps-10"><?php echo $read_email->ghi_chu;?></span></p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Hồ sơ sức khỏe</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input type="text" name="s" placeholder="Patients id">
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="flexbox bb-1 mb-15">
                                <div><p><span class="text-mute">Họ và tên: </span> <strong><?php echo $read_email->ho_ten; ?></strong></p></div>
                                <div><p><span class="text-mute">Mã khách hàng: </span> <strong><?php echo $read_email->id; ?></strong></p></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row bb-1 pb-10">
                                        <div class="col-4">
                                            <img class="img-fluid float-start w-30 mt-10 me-10" src="public/layout/images/weight.png" alt="">
                                            <div>
                                                <p class="mb-0"><small>Cân nặng</small></p>
                                                <h5 class="mb-0"><strong><?php echo $id_profile->can_nang;?></strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-4 bs-1 be-1">
                                            <img class="img-fluid float-start w-30 mt-10 me-10" src="public/layout/images/human.png" alt="">
                                            <div>
                                                <p class="mb-0"><small>Chiều cao</small></p>
                                                <h5 class=" mb-0"><strong><?php echo $id_profile->chieu_cao;?></strong></h5>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img class="img-fluid float-start w-30 mt-10 me-10" src="public/layout/images/bmi.png" alt="">
                                            <div>
                                                <p class="mb-0"><small>Nhịp tim</small></p>
                                                <h5 class="mb-0"><strong><?php echo $id_profile->nhip_tim;?></strong></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-12">
                                            <span class="text-danger">Các chỉ số khác</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="progress progress-xs mb-0 mt-5 w-100">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    Nhiệt độ</div>
                                            </div>
                                            <h2 class="float-start mt-0 mr-10"><strong><?php echo $id_profile->nhiet_do;?></strong></h2>
                                        </div>
                                        <div class="col-6 bl-1">
                                            <div class="progress progress-xs mb-0 mt-5 w-70">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    Huyết áp</div>
                                            </div>
                                            <h2 class="float-start mt-0 mr-10"><strong><?php echo $id_profile->huyet_ap;?></strong></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body pt-0">
                            <p><small>Ngày cập nhật: <?php echo date("d-m-Y", strtotime($id_profile->ngay_kham)) ?></small></p>
                        </div>
                        <div class="box-body bg-warning">
                            <h6 class="mb-0 float-start me-10 pt-1">Thông tin: </h6>
                            <p><?php echo $id_profile->thong_tin_benh;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-12">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Lịch trình di chuyển</h4>
                        </div>
                        <div class="box-body">
                            <div id="slimtest6">
                                <div class="box-body">
                                    <div class="timeline-line timeline-line-dotted">
                                        <?php foreach ($move as $value) { ?>
                                            <div class="timeline__group">
                                                <div class="timeline__box">
                                                    <div class="timeline__date">
                                                        <span class="timeline__month"><?php echo date("d-m-Y", strtotime($value->ngay_khoi_hanh));?></span>
                                                    </div>
                                                    <div class="timeline__post">
                                                        <div class="timeline__content">
                                                            <div class="timeline-heading">
                                                                <h4 class="timeline-title"><?php echo $value->phuong_tien . " - " . $value->so_hieu_phuong_tien; ?></h4>
                                                            </div>
                                                            <div class="timeline-body">
                                                                <p>Điểm đi: <?php echo $value->diem_di;?></p>
                                                            </div>
                                                            <div class="timeline-body">
                                                                <p>Điểm đến: <?php echo $value->diem_den;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
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