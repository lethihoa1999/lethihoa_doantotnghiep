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
                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                            <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: #ffa800; margin-left: 1.9%;" onclick="window.location.href='add_news.php'"></i>Thêm tin tức</button>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                        
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;">
                                    <thead>
                                    <tr>
                                        <th>Tiêu đề</th>
                                        <!-- <th>Nội dung</th> -->
                                        <th>Hình ảnh</th>
                                        <th>Người đăng</th>
                                        <th>Thời gian đăng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($manage_news as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->tieu_de;?></td>
                                            <!-- <td><?php echo $value->noi_dung;?></td> -->
                                            <td><?php echo $value->anh;?></td>
                                            <td><?php echo $value->nguoi_dang;?></td>
                                            <td><?php $thoi_gian_dang=$value->thoi_gian_dang; echo date("d-m-Y", strtotime($thoi_gian_dang)); ?></td>  

                                            <td style="text-align: center; width: 15%;"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_news.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_news.php?id=<?php echo $value->id;?>' ">Delete</button></td>
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

