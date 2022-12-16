<style>
    .col-4{
        margin-top: 2.5%;
    }
    .img-illnes{
        width: 100%;
        height: 85%;
    }
</style>
<div class="content-wrapper">
    <div class="container-full">
        <section class="content"> 
            <div class="col-12">
                <h3 class="color-h">BỆNH HỌC</h3>
                <hr  width="100%" style="margin: 0 auto; " />               
                <div class="row">
                <?php foreach ($illnes as $key=>$value) { ?>
                    <div class="col-4">                               
                    <a href="illnes_detail.php?id=<?php echo $value->id; ?>"><img src="public/layout/images/anhdoan/benhhoc/<?php echo $value->anh; ?>" class="img-illnes"></a>
                        <a href="illnes_detail.php?id=<?php echo $value->id; ?>"><span class="color-h"><?php echo $value->tieu_de; ?></span></a>
                    </div>
                    <?php } ?>
                </div>               
            </div>    
        </section>
    </div>
</div>
