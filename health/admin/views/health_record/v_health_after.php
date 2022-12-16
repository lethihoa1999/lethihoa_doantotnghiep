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
                                            <label class="form-label">Mã khách hàng</label>
                                            <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-label">Ngày khám</label>
                                            <input class="form-control" name="ngay_kham" type="date" value="" id="example-date-input">
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
                                            <label class="form-label">Giới tính</label>
                                            <select name="gioi_tinh" class="form-select">
                                                <option value="">Select</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </select>
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
                            <h3 class="box-title">Quản lý hồ sơ sức khỏe sau tiêm</h3>
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                        <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: red; margin-left: 1.9%; width: 16%;" onclick="window.location.href='add_health.php?luot_tiem=2'"></i>Thêm</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;">
                                    <thead>
                                    <tr>
                                        <th>Mã khách hàng</th>
                                        <th>Tên Khách hàng</th>
                                        <th>Giới tính</th>   
                                        <th>Ngày khám</th>                
                                        <th>Huyết áp</th>
                                        <th>Nhịp tim</th>
                                        <th>Nhiệt độ</th>
                                        <th>Tình trạng sức khỏe sau tiêm</th>                                        
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($health_after as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $m_health_after->read_customer_by_id($value->id_khach_hang)->ma_khach_hang;?></td>
                                            <td><?php echo $m_health_after->read_customer_by_id($value->id_khach_hang)->ho_ten;?></td>
                                            <td><?php echo $m_health_after->read_customer_by_id($value->id_khach_hang)->gioi_tinh;?></td>
                                            <td><?php $ngay_kham=$value->ngay_kham; echo date("d-m-Y", strtotime($ngay_kham)); ?></td>
                                            <td><?php echo $value->huyet_ap;?></td>
                                            <td><?php echo $value->nhip_tim;?></td>
                                            <td><?php echo $value->nhiet_do;?></td>                              
                                            <td><?php echo $value->ket_luan;?></td>
                                            <td style="text-align: center; width: 13%;"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_health_after.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_health_after.php?id=<?php echo $value->id;?>' " >Delete</button></td>
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

