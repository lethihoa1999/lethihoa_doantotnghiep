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
                    <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">THANH TOÁN</h4>

               
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style="font-size: 21px;">
                            <div class="col-3">
                                <label>Mã thanh toán: </label>
                                <?php echo $ran; ?>
                            </div>
                            
                            <div class="col-4">
                                <label>Tổng tiền: </label>                  
                                <?php 
                                if(isset($_SESSION['tong_tien'])){
                                    echo $_SESSION['tong_tien'];
                                } 
                                ?>
                            </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box-header with-border" style="color: gold; ">
                        <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">Hướng dẫn thanh toán</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Bước 1: Đăng nhập vào MOMO, chọn quét mã.
                        </div>
                        <div class="col-6">       
                            Bước 2: Quét mã
                        </div>
                        <div>
                            <img src="public/layout/images/anhdoan/momo.jpg" alt="" style="width: 30%;">
                        </div>
                    <!-- </div> -->
                    
                        <div class="col-6">       
                            Bước 3: Nhập số tiền cần thanh toán (<?php 
                                        if(isset($_SESSION['tong_tien'])){
                                            echo $_SESSION['tong_tien'];
                                        } 
                                        ?>) vào ô số tiền và nhập mã thanh toán (<?php echo $ran; ?>) vào ô ghi chú, nhấn nút "chuyển tiền"
                        </div>
                        <div>
                            <img src="public/layout/images/anhdoan/thanh_toan.png" alt="" style="width: 30%;">
                        </div>
                        <div class="col-6">
                            Bước 4: Kiểm tra và xác nhận
                        </div>
                        <div>
                            <img src="public/layout/images/anhdoan/xac_nhan.png" alt="" style="width: 30%;">
                        </div>

                    </div>
                </div>
                            
                            <div class="text-xs-right" style="text-align: center; margin-top: 0.9%;">
                            <button type="submit" name="btnsubmit"  class="btn btn-info me-1" style="margin-left: 0.9%;">Hoàn thành</button>
                            <button type="button" onclick="window.location.href='confilm_register.php'" class="btn btn-warning me-1" style="margin-left: 0.9%;">Cancel</button>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    </div>
</div>