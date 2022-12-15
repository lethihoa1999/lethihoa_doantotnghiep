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
                                            <label class="form-label">Tên cơ sở tiêm chủng</label>
                                            <input type="text" name="ten_co_so" class="form-control" placeholder="Tên cơ sở">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Số Hotline</label>
                                            <input type="text" name="so_dien_thoai" class="form-control" placeholder="Số Hotline">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Địa chỉ</label>
                                            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
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
                            <h3 class="box-title">Quản lý cơ sở tiêm chủng</h3>
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                            <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: red; margin-left: 1.9%;" onclick="window.location.href='add_facility.php'"></i>Thêm cơ sở tiêm chủng</button>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;">
                                    <thead>
                                    <tr>
                                        <th>Tên cơ sở tiêm chủng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số Hotline</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($manage_facility as $key=>$value) { ?>
                                        <tr>
                                            <td><?php echo $value->ten_co_so;?></td>
                                            <td><?php echo $value->dia_chi;?></td>
                                            <td><?php echo $value->so_dien_thoai;?></td>
                                            <td style="text-align: center; width: 15%;"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_facility.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_facility.php?id=<?php echo $value->id;?>' ">Delete</button></td>
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

