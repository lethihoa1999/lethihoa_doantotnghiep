<!-- Content Wrapper. Contains page content -->
<style>
    .col-3{
        margin-top:40px;
    }
    .col-4{
        margin-top:40px;
    }
    .service{
        display: flex;
    }
    .service span{
        position: absolute;
        margin: 130px auto;
        color: #000;
        background: #D9D9D9;
        padding: 10px;
        opacity: 0.7;
        width: 18.5%;
    }
    .image-home{
        height: 220px;
    }
</style>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="col-12">
                <img src="public/layout/images/anhdoan/banner.jpg" >
            </div>
            <div class="col-12">
                <h3 class="color-h">DANH MỤC VACXIN</h3>
                <hr  width="100%" style="margin: 0 auto; " />
                <div class="row" style="text-align: center;">
                <?php foreach ($show_vacxin as $key=>$value) { ?>
                    <div class="col-3">
                        <a href="vacxin_detail.php?id=<?php echo $value->id; ?>"><img src="public/layout/images/anhdoan/loaivacxin/<?php echo $value->anh; ?>" class="img-illnes"></a>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="col-12">
                <h3 class="color-h">DỊCH VỤ TIÊM CHỦNG</h3>
                <hr  width="100%" style="margin: 0 auto; " />
                <div class="row" style="text-align: center;">
                    <div class="col-3 service">
                        <img src="public/layout/images/anhdoan/dichvutiem/dv3-1.jpg" >
                        <span>TIÊM TRỌN GÓI CHO NGƯỜI LỚN</span>
                    </div>
                    <div class="col-3 service">
                        <img src="public/layout/images/anhdoan/dichvutiem/dv4-1.jpg" >
                        <span>TIÊM TRỌN GÓI CHO TRẺ EM</span>
                    </div>
                    <div class="col-3 service">
                        <img src="public/layout/images/anhdoan/dichvutiem/dvu5.jpg" >
                        <span>TIÊM CHỦNG THEO YÊU CẦU</span>
                    </div>
                    <div class="col-3 service">
                        <img src="public/layout/images/anhdoan/dichvutiem/dvu6.jpg" >
                        <span>TIÊM CHO PHỤ NỮ CHUẨN BỊ MANG THAI</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3 class="color-h">BỆNH HỌC</h3>
                <hr  width="100%" style="margin: 0 auto; " />
                <div class="row" style="text-align: center;">              
                <?php foreach ($show_illness as $key=>$value) { ?>
                    <div class="col-4">
                        <a href="illnes_detail.php?id=<?php echo $value->id; ?>"><img src="public/layout/images/anhdoan/benhhoc/<?php echo $value->anh; ?>" class="img-illnes"></a>
                    </div>
                <?php } ?>
                </div>
            </div>
        
            
         
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->