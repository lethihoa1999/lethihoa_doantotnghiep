<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Quản lý tiêm chủng</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i> </a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Quản lý đăng ký tiêm chủng</li>
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
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="text" name="so_dien_thoai" class="form-control" placeholder="số điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Nghề nghiệp</label>
                                            <input type="text" name="nghe_nghiep" class="form-control" placeholder="Nghề nghiệp">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Mã thẻ bảo hiểm</label>
                                            <input type="text" name="ma_the_bao_hiem" class="form-control" placeholder="Mã bảo hiểm">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-label">Ngày sinh</label>
                                            <input class="form-control" name="ngay_sinh" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Địa chỉ tiêm chủng</label>
                                            <input type="text" name="dia_chi" class="form-control" placeholder="địa chỉ">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-label">Thời gian mong muốn</label>
                                            <input class="form-control" name="thoi_gian_mong_muon" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Trạng thái tiêm</label>
                                            <select name="trang_thai_tiem" class="form-select">
                                                <option value="">Chọn</option>
                                                <option value="0">Chưa tiêm</option>
                                                <option value="1">Đã tiêm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsubmit" class="btn btn-success me-1 mt-sm-2"></i>Tìm kiếm</button>
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
                            <h3 class="box-title">Quản lý thông tin đăng ký tiêm chủng</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ & Tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Số điện thoại</th>
                                        <th>Nghề nghiệp</th>
                                        <th>Thời gian mong muốn</th>
                                        <th>Trạng thái</th>
                                        <th>Mã thẻ bảo hiểm</th>
                                        <th>Địa chỉ tiêm chủng</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $count = 0;
                                        foreach ($show_table as $key=>$value) {
                                            $count += 1;
                                            ?>
                                        <tr>
                                            <td><?php echo $count; ?></td>
                                            <td><?php echo $value->ho_ten; ?></a></td>
                                            <td><?php echo date("d-m-Y", strtotime($value->ngay_sinh)); ?></td>
                                            <td>
                                                <?php if ($value->gioi_tinh == 0) { ?>
                                                    Nam
                                                <?php } else { ?>
                                                    Nữ
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $value->so_dien_thoai; ?></td>
                                            <td><?php echo $value->nghe_nghiep; ?></td>
                                            <td><?php echo date("d-m-Y", strtotime($value->thoi_gian_mong_muon_tiem)); ?></td>
                                            <td>
                                                <?php if ($value->trang_thai_tiem == 0) { ?>
                                                    <p class="waves-effect waves-light btn btn-rounded btn-danger btn-xs mb-5">Chưa tiêm</p>
                                                <?php } else { ?>
                                                    <p class="waves-effect waves-light btn btn-rounded btn-success btn-xs mb-5">Đã tiêm</p>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $value->so_the_bao_hiem; ?></td>
                                            <td><?php echo $value->dia_chi; ?></td>
                                            <td>
                                                <a href="vaccination_detail_infor.php?id=<?php echo $value->id; ?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></a>
                                            </td>
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
