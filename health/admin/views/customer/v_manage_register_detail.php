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
                            <h3 class="box-title">Quản lý thông tin chi tiết đăng ký</h3>
                        </div>                      
                        <!-- /.box-header -->
                        <div class="box-body">
                        <h5 style="color: #ffe062; ">Mã đăng ký: <?php echo $chi_tiet_dang_ky->ma_dang_ky; ?>&emsp; Họ và tên: <?php echo $chi_tiet_dang_ky->ho_ten; ?>&emsp;Số điện thoại liên hệ: <?php echo $chi_tiet_dang_ky->so_dien_thoai; ?> </h5>
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="5" id="example" class="table table-bordered table-striped" style="background-color: white;" >
                                    <thead>
                                    <tr>
                                        <th>Cơ sở tiêm</th>
                                        <th>Vacxin</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Ngày dự kiến tiêm</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($dang_ky_vacxin as $key=>$value) { ?>
                                    <?php
                                    // $id_quan_ly_vacxin = $value->id_quan_ly_vacxin; 
                                    // $ql = $m_manage_vacxin->read_quan_ly_vacxin_id($id_quan_ly_vacxin);
                                    // $id_cs = $ql-> 
                                    ?>
                                        <tr>
                                            <td><?php echo $m_manage_register->read_by_id_co_so_tiem($m_manage_register->read_co_so_tiem_id($value->id_quan_ly_vacxin)->id_co_so_tiem)->ten_co_so; ?></td>
                                            <td><?php echo $m_manage_register->read_by_id_vacxin($m_manage_register->read_co_so_tiem_id($value->id_quan_ly_vacxin)->id_vacxin)->ten_vacxin; ?></td>
                                            <!-- <td><?php echo $value->ma_khach_hang;?></td> -->
                                            <td><?php echo $value->so_luong;?></td>
                                            <td><?php echo $value->gia_tien;?></td>
                                            <td><?php $day=$value->ngay_du_kien_tiem; echo date("d-m-Y", strtotime($day)); ?></td>
                                            <td><button type="button" class="btn btn-cyan btn-sm" onclick="window.location.href='edit_manage_register_detail.php?id=<?php echo $value->id;?>'">Edit</button>
                                            <button type="button" name="delete" class="btn btn-danger btn-sm" style="" onclick="window.location.href='delete_register_detail.php?id=<?php echo $value->id;?>'" >Delete</button></td>
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
