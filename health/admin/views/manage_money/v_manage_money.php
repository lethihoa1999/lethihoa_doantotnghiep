
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Quản lý thông tin</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Trang</li>
                                <li class="breadcrumb-item active" aria-current="page">Quản lý và tiếp nhận đăng ký</li>
                            </ol>
                        </nav>
                    </div>
                </div> 

            </div>
        </div> -->

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
                                            <label class="form-label">Họ & Tên</label>
                                            <input type="text" name="ho_ten" class="form-control" placeholder="Họ & tên">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Giới tính</label>                            
                                            <input type="text" name="dia_chi" class="form-control" placeholder="Giới tính">                                           
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Giới tính</label>
                                            <input type="text" name="dia_chi" class="form-control" placeholder="Giới tính">
                                            <select id="gioi_tinh" name="gioi_tinh" form="form-control">
                                                <option value="nam">Nam</option>
                                                <option value="nu">Nữ</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="example-date-input" class="form-label">Ngày sinh</label>
                                            <input class="form-control" type="date" name="ngay_sinh" value="" id="ngay_sinh">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Số điện thoại liên hệ</label>
                                            <input type="text" name="so_dien_thoai" minlength="4" maxlength="12" class="form-control" placeholder="số điện thoại">
                                        </div>
                                    </div>                                 
                                    <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn btn-success me-1 mt-sm-2" style="margin-left: 80%; "></i>Tìm kiếm</button>
                                    </div>
                                    <!-- <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                                        <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: red; margin-left: 1.9%;"></i>Đăng ký tiêm</button>
                                    </div> -->
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
                            <h3 class="box-title">Quản lý và tiếp nhận thu chi</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;" >
                                    <thead>
                                    <tr>
                                        <th>Tên Khách hàng</th>
                                        <th>Giới tính</th>
                                        <th>Ngày sinh</th>
                                        <th>Số điện thoại liên hệ</th>
                                        <th>Tên vacxin tiêm chủng</th>
                                        <th>Nước sản xuất</th>
                                        <th>Giá thành</th>
                                        <th>Kết luận sau khám</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($manage_money as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ho_ten;?></td>
                                            <td><?php if($value->gioi_tinh==1)
                                                {
                                                    echo "Nữ";
                                                }
                                                else
                                                {
                                                    echo "Nam";
                                                }
                                                ?></td>
                                            <td><?php $birthday=$value->ngay_sinh; echo date("d-m-Y", strtotime($birthday)); ?></td>
                                            <td><?php echo $value->so_dien_thoai;?></td>
                                            <td><?php echo $value->dia_chi;?></td>
                                            <!-- <td><?php echo $value->nghe_nghiep;?></td> -->
                                            <!-- <td><?php echo $value->email;?></td> -->
                                            <td><?php echo $value->so_the_bao_hiem;?></td>
                                            <!-- <td><?php if($value->quoc_tich==1)
                                                {
                                                    echo "Quốc gia khác";
                                                }
                                                else
                                                {
                                                    echo "Việt Nam";
                                                }
                                                ?></td> -->

                                            <!--                                        <td><button type="button" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></button></td>-->
                                            <td>1500.000 VNĐ</td>
                                            <td>Đủ điều kiện tiêm</td>
                                            <td>Đã thanh toán</td>
                                            <td><a href="customer_details.php?id=<?php echo $value->id;?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xm mb-5"><i class="fad fa-eye"></i></a></td>
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
