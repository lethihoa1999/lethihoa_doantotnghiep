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
            </div>
                <h4 class="color-h"><?php echo $m_information_user->illnes_detail($id)->tieu_de; ?></h4>
                <hr  width="100%" style="margin: 0 auto; " />
                <div class="img" style="margin: 0 auto; margin-top: 30px; display: flex; justify-content: center; width: 65%;"><img src="public/layout/images/anhdoan/benhhoc/<?php echo $m_information_user->illnes_detail($id)->anh ?>"></div>
                <div style="color: black;">
                <?php echo $m_information_user->illnes_detail($id)->noi_dung; ?>
                </div>
                
            </div>
        </section>
    </div>
</div>
