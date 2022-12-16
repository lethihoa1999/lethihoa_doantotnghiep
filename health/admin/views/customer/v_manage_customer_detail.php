<?php
// var_dump($register);
// die();
?>
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="row">

                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quản lý chi tiết thông tin đăng ký</h3>
                        </div>      
                        <!-- /.box-header -->
                        <div class="box-body">
                        <h5 style="color: #ffe062; ">Mã khách hàng: <?php echo $m_manage_register->read_customer_by_id($id)->ma_khach_hang; ?>&emsp;Họ và tên: <?php echo $m_manage_register->read_customer_by_id($id)->ho_ten; ?>&emsp;Số điện thoại liên hệ: <?php echo $m_manage_register->read_customer_by_id($id)->so_dien_thoai_lien_lac; ?> </h5>
                        <div class="col-lg-6 col-12 d-flex align-items-sm-center">
                            <button type="submit" name="btnsearch" class="btn me-1 mt-sm-2" style="background-color: #ffa800; margin-left: 1.9%;" onclick="window.location.href='add_customer_detail.php'"></i>Thêm lần tiêm</button>
                        </div>
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;" >
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Cơ sở tiêm</th>
                                        <th>Vacxin tiêm</th>
                                        <th>Giá tiền</th>   
                                        <th>Ngày tiêm</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i=0; foreach ($chi_tiet_khach_hang  as $key=>$value) { $i++ ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $m_manage_register->read_by_id_co_so_tiem($value->id_co_so_tiem)->ten_co_so ?></td>
                                            <td><?php echo $m_manage_register->read_by_id_vacxin($value->id_vacxin)->ten_vacxin ?></td>
                                            <td><?php echo $m_manage_register->read_by_id_vacxin($value->id_vacxin)->gia_thanh ?></td>
                                            <td><?php echo $value->ngay_tiem ?></td>
                                            <td><?php if($value->trang_thai_thanh_toan==0){
                                                    echo "Chưa thanh toán";
                                                } else if($value->trang_thai_thanh_toan==1){
                                                    echo "Đã thanh toán";
                                                } else if($value->trang_thai_thanh_toan==2){
                                                    echo "Hoàn tiền";
                                                }else if($value->trang_thai_thanh_toan==3){
                                                    echo "Đã hoàn tiền";
                                                } 
                                            ?></td>
                                            <td style="text-align: center"><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_customer_detail.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_customer_detail.php?id=<?php echo $value->id;?>' " >Delete</button></td>
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
