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
                <div class="box-header with-border">
                    <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">THANH TOÁN</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <label>Họ và tên: </label>
                            <?php 
                            if(isset($_SESSION['ho_ten'])){
                                echo $_SESSION['ho_ten'];
                            } 
                            ?>

                            <label>Số điện thoại: </label>                  
                            <?php 
                            if(isset($_SESSION['so_dien_thoai'])){
                                echo $_SESSION['so_dien_thoai'];
                            } 
                            ?>

                            <label>Cơ sở tiêm: </label>                  
                            <?php 
                            if(isset($_SESSION['co_so_tiem'])){
                                echo $_SESSION['co_so_tiem'];
                            } 
                            ?>

                            <label>Vacxin: </label>                  
                            <?php 
                            for($i=1; $i <= $_SESSION['index']; $i++){
                                if(isset($_SESSION['ten_vacxin'][$i])){
                                    echo "         ".$_SESSION['ten_vacxin'][$i];
                                }

                                // if(isset($_SESSION['so_luong'][$i])){
                                //     echo $_SESSION['so_luong'][$i];
                                // }

                                // if(isset($_SESSION['ngay_du_kien_tiem'][$i])){
                                //     echo $_SESSION['ngay_du_kien_tiem'][$i];
                                // }

                                // if(isset($_SESSION['gia_tien'][$i])){
                                //     echo $_SESSION['gia_tien'][$i];
                                // }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
