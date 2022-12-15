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
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Mã khách hàng</label>
                                            <input type="text" name="ma_khach_hang" class="form-control" placeholder="Mã khách hàng">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Họ & Tên</label>
                                            <input type="text" name="ho_ten" class="form-control" placeholder="Họ và tên">
                                        </div>
                                    </div>                                                                                                         
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Số điện thoại liên lạc</label>
                                            <input type="text" name="so_dien_thoai_lien_lac" minlength="4" maxlength="12" class="form-control" placeholder="số điện thoại liên lạc">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn btn-success me-1 mt-sm-2" style="margin-left: 80%; "></i>Tìm kiếm</button>
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
                            <h3 class="box-title">Quản lý thông tin khách hàng</h3>
                        </div>

                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                            <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: red; margin-left: 1.9%;" onclick="window.location.href='add_customer.php'"></i>Thêm khách hàng</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;" >
                                    <thead>
                                    <tr>
                                        <th>Mã khách hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Giới tính</th>
                                        <th>Ngày sinh</th>
                                        <th>Số điện thoại liên lạc</th>
                                        <th>Địa chỉ</th>
                                        <th>Chi tiết</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($customer as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ma_khach_hang;?></td>
                                            <td><?php echo $value->ho_ten;?></td>
                                            <td><?php echo $value->gioi_tinh;?></td>
                                            <td><?php $birthday=$value->ngay_sinh; echo date("d-m-Y", strtotime($birthday)); ?></td>
                                            <td><?php echo $value->so_dien_thoai_lien_lac;?></td>
                                            <td><?php echo $value->dia_chi;?></td>

                
                                            <!-- <td><?php $birthday=$value->ngay_sinh; echo date("d-m-Y", strtotime($birthday)); ?></td> -->

                                            <!-- <td><?php if($value->quoc_tich==1)
                                                {
                                                    echo "Quốc gia khác";
                                                }
                                                else
                                                {
                                                    echo "Việt Nam";
                                                }
                                                ?></td> -->
                                            <td><a href="manage_customer_detail.php?id=<?php echo $value->id;?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></a></td>
                                            <td style="text-align: center; width: 15%;"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_customer.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_customer.php?id=<?php echo $value->id;?>' ">Delete</button></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
