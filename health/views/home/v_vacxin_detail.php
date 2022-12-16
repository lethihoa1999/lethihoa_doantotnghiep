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
</style>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="col-12">
                <img src="public/layout/images/anhdoan/camnang2.jpg" style="width: 100%; height: 10%;">
                <h4 class="color-h"><?php echo $m_vacxin_detail->vacxin_detail($id)->ten_vacxin; ?></h4>
                <hr  width="100%" style="margin: 0 auto; " />
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="img" style="margin: 0 auto; margin-top: 30px; display: flex; justify-content: center; width: 65%;"><img src="public/layout/images/anhdoan/loaivacxin/<?php echo $m_vacxin_detail->vacxin_detail($id)->anh ?>"></div>
                </div>
                <div class="col-6" style="margin-top: 6%; ">
                    <h6 class="color-h">Tên vacxin: &emsp;<?php echo $m_vacxin_detail->vacxin_detail($id)->ten_vacxin; ?></h6>
                    <h6 class="color-h">Nước sản xuất: &emsp;<?php echo $m_vacxin_detail->vacxin_detail($id)->nuoc_san_xuat; ?></h6>
                    <h6 class="color-h">Giá thành: &emsp;<?php echo $m_vacxin_detail->vacxin_detail($id)->gia_thanh; ?>.VNĐ</h6><br>                       
                    <button class="btn btn-success" style="width: 25%;" type="submit" name="btnsubmit"  onclick="window.location.href='register_vacxin.php'">Đặt mua</button>
                </div>
            </div>


                <div style="color: black;">
                    <?php echo $m_vacxin_detail->vacxin_detail($id)->chi_tiet; ?>   
                </div>
            </div>
        </section>
    </div>
</div>
