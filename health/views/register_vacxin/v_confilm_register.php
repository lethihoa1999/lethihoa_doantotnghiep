<style>
    .form-vacxin {
        background-color: #f7b129;
        border-color: #f7b129;
    }
</style>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Thanh toán</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <?php
            // include_once ("views/error.php");
            // $errorClass = new CError();
            // $errorClass->showError($done);
            // $errorClass->showError($error);

            //Error::showError($error_1);
            ?>
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border" style="color: gold; ">
                    <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">Thông tin đăng ký</h4></h4>

               
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style="font-size: 21px;">
                            <div class="col-4">
                                <label>Họ và tên: </label>
                                <?php 
                                if(isset($_SESSION['ho_ten'])){
                                    echo $_SESSION['ho_ten'];
                                } 
                                ?>
                            </div>
                            <div class="col-4">
                                <label>Số điện thoại: </label>                  
                                <?php 
                                if(isset($_SESSION['so_dien_thoai'])){
                                    echo $_SESSION['so_dien_thoai'];
                                } 
                                ?>
                            </div>
                            <div class="col-4">
                                <label>Cơ sở tiêm: </label>                  
                                <?php 
                                if(isset($_SESSION['co_so_tiem'])){
                                    echo $m_register_vaccin->read_facility_by_id($_SESSION['co_so_tiem'][$i])->ten_co_so;
                                } 
                                ?>
                            </div>
                    </div>
                </div>
                <div class="table-responsive">
                                <table id="example" class="table table-bordered table-striped" style="color: gold;">
                                    <thead>
                                    <tr>
                                        <th>Tên Vacxin</th>
                                        <th>Số lượng</th>
                                        <th>Ngày dự kiến tiêm</th>
                                        <th>Giá tiền</th>         
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php  for($i=1; $i <= $_SESSION['index']; $i++) { ?>
                                        <tr>
                                            <td><?php if(isset($_SESSION['ten_vacxin'][$i])){
                                    echo $m_register_vaccin->read_vacxin_by_id($_SESSION['ten_vacxin'][$i])->ten_vacxin;
                                }?></td>
                                            <td><?php if(isset($_SESSION['so_luong'][$i])){
                                    echo $_SESSION['so_luong'][$i];
                                }
                                                ?></td>
                                            <td><?php if(isset($_SESSION['ngay_du_kien_tiem'][$i])){
                                    echo $_SESSION['ngay_du_kien_tiem'][$i];
                                } ?></td>
                                            <td><?php if(isset($_SESSION['gia_tien'][$i])){
                                    echo $_SESSION['gia_tien'][$i];
                                }?></td>
                                            
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <label>Tổng tiền</label>
                            <?php 
                            if(isset($_SESSION['tong_tien'])){
                                echo $_SESSION['tong_tien'];
                            } 
                            ?>
                            <div class="text-xs-right" style="text-align: center; margin-top: 0.9%;">
                            <button type="button" onclick="window.location.href='pay_money.php'" class="btn btn-info me-1" style="margin-left: 0.9%;">Đăng ký</button>
                            <button type="button" onclick="window.location.href='register_vacxin.php'" class="btn btn-warning me-1" style="margin-left: 0.9%;">Cancel</button>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </div>
</div>