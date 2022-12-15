
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quản lý vacxin theo cơ sở tiêm chủng</h3>
                        </div>
                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                            <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: red; margin-left: 1.9%;" onclick="window.location.href='add_vacxin.php'"></i>Thêm vacxin</button>
                        </div>
                        
                        <div style="display: inline; margin-top: 1%; margin-left: 2%;"> <?php foreach ($manage_facility as $key=>$value) { ?>
                            <button class="btn" onclick="window.location.href='manage_vacxin.php?id=<?php echo $value->id;?>'" style="background-color: cornsilk; <?php if($id==$value->id) { echo 'background-color: orangered'; } ?>"><?php echo $value->ten_co_so;?></button>
                        <!-- /.box-header -->
                        <?php }?></div>
                       
                        <div class="box-body">
                            
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên vacxin</th>
                                        <th>Nước sản xuất</th>
                                        <th>Giá thành</th>
                                        <th>Số lượng</th>
                                        <!-- <th>Ảnh</th> -->
                                        <th style="width: 96.2625px">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=0; foreach ($manage_vacxin as $key=>$value) { $i++;?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <!-- <td><?php echo $m_manage_vacxin->read_facility_by_id($value->id_co_so_tiem)->ten_co_so;?></td> -->
                                            <td><?php echo $m_manage_vacxin->read_vacxin_by_id($value->id_vacxin)->ten_vacxin;?></td>
                                            <td><?php echo $m_manage_vacxin->read_vacxin_by_id($value->id_vacxin)->nuoc_san_xuat;?></td>     
                                            <td><?php echo $m_manage_vacxin->read_vacxin_by_id($value->id_vacxin)->gia_thanh;?></td>    
                                            <td><?php echo $value->so_luong;?></td>     
                                            <td style="text-align: center"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_vacxin.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_vacxin.php?id=<?php echo $value->id;?>' " >Delete</button></td>
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

