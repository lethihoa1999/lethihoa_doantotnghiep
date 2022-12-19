<style>
    .form-vacxin {
        background-color: #f7b129;
        border-color: #f7b129;
    }
    .btnChon div {
        margin-bottom: 0.8%;
    }
</style>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Đăng ký tiêm chủng</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="fad fa-home-alt"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Forms</li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng ký tiêm chủng</li>
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
                    <h4 class="box-title" style="color: cornsilk; display: flex; justify-content: center; margin-top: 1%; ">ĐĂNG KÝ TIÊM
                        CHỦNG</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="POST" name="frmvacxin" id="frmvacxin">
                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Họ & Tên <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="ho_ten" class="form-control" <?php if ($read_email->ho_ten != "") { ?> value="<?php echo $read_email->ho_ten; ?>" <?php } else { ?> value="" <?php } ?> required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Số điện thoại <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="so_dien_thoai" class="form-control" <?php if ($read_email->so_dien_thoai != "") { ?> value="<?php echo $read_email->so_dien_thoai; ?>" <?php } else { ?> value="" <?php } ?> required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="form-group">
                                            <h5>Cơ sở tiêm <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="co_so_tiem" id="select" required class="form-select tinh">
                                                    <option value="">--Chọn cơ sở tiêm--</option>
                                                    <?php
                                                    foreach ($m_facility as $key) { ?>
                                                        <option value="<?php echo $key->id; ?>"><?php echo $key->ten_co_so; ?>
                                                        </option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <button  onclick="myFunction()" type="button" class="btn" name="btnchonvacxin" id="btnchonvacxin" style="background-color: #f7b129; margin-bottom: 2.5%; ">Chọn
                                                    vacxin</button>
                                            </div>
                                            <input type="number" id="index" name="index" style="display: none; ">
                                            <div id="btnChon" class="btnChon">
                                                <?php
                                                for ($i = 1; $i <= 3; $i++) :
                                                ?>
                                                <div style="margin-bottom: 0.8%;">
                                                    <label>Chọn vacxin:</label>
                                                    <select onchange="upperCase<?php echo $i ?>()" class="col-3 form-vacxin" class="form-select" name="ten_vacxin<?php echo $i; ?>" id="id_vacxin<?php echo $i; ?>">
                                                        <option value="">--Chọn vacxin--</option>
                                                        <?php foreach ($m_vacxin as $key) { ?><option value="<?php echo $key->id; ?>"><?php echo $key->ten_vacxin; echo '-'.$key->nuoc_san_xuat; ?></option><?php } ?>
                                                    </select>
                                                    <label>Số lượng:</label>
                                                    <input onchange="upperCase<?php echo $i ?>()" class="form-vacxin" type="number" min="0" id="so_luong<?php echo $i; ?>" name="so_luong<?php echo $i; ?>">
                                                    <label>Ngày dự kiến tiêm:</label>
                                                    <input class="form-vacxin" type="date" id="ngay_du_kien_tiem<?php echo $i; ?>" name="ngay_du_kien_tiem<?php echo $i; ?>">
                                                    <label>Giá tiền:</label>
                                                    <input style="background-color: #f7b129; border-color: #f7b129;" type="text" name="gia_tien<?php echo $i; ?>" id="demo<?php echo $i ?>">
                                                </div>
                                                <script>
                                                        function upperCase<?php echo $i ?>()
                                                        {
                                                            var x = new Array();
                                                            x[<?php echo $i ?>] = document.getElementById("id_vacxin<?php echo $i ?>").value;
                                                           
                                                            var xhttp = new XMLHttpRequest();
                                                            xhttp.onload = function() {
                                                                var gia_thanh =new Array();
                                                                gia_thanh[<?php echo $i ?>] = this.responseText;
                                                                var y = new Array();
                                                                y[<?php echo $i ?>] = document.getElementById("so_luong<?php echo $i ?>").value;
                                                                document.getElementById("demo<?php echo $i ?>").value = y[<?php echo $i ?>] * gia_thanh[<?php echo $i ?>];
                                                            }
                                                            xhttp.open("GET", "get.php?q="+ x[<?php echo $i ?>]);
                                                            xhttp.send(); 
                                                        }
                                                    </script>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs-right" style="text-align: center; margin-top: 0.9%;">
                                    <button type="submit" name="btnsubmit" class="btn btn-info">Gửi đăng ký</button>
                                    <button type="button" onclick="window.location.href='register_vacxin.php'" class="btn btn-warning me-1" style="margin-left: 0.9%;">Cancel</button>
                                </div>
                            </form>

                            <script type="text/javascript">                   
                                var index=3;
                                function myFunction() {
                                    index+=1;
                                const element = document.createElement("div");


                                element.innerHTML = '<label>Chọn vacxin:</label> <select onchange="upperCase'+ index +'()" class="col-3 form-vacxin" name="ten_vacxin' + index + '" id="id_vacxin' +
                                                    index +
                                                '" required class="form-select"><option value="">--Chọn vacxin--</option><?php foreach ($m_vacxin as $key) { ?><option value="<?php echo $key->id; ?>"><?php echo $key->ten_vacxin; echo '-'. $key->nuoc_san_xuat; ?></option><?php } ?></select> <label>Số lượng:</label> <input class="form-vacxin" onchange="upperCase'+ index +'()" name="so_luong'+index+'"  id="so_luong' +
                                                index +
                                                '" type="number" min="0"> <label>Ngày dự kiến tiêm:</label> <input class="form-vacxin" type="date" name="ngay_du_kien_tiem'+ index +'"> Giá tiền:</> <input style="background-color: #f7b129; border-color: #f7b129;" type="text" name="gia_tien'+index+'" id="demo'+index+'"><br>';  
                                document.getElementById("btnChon").appendChild(element);
                                const script = document.createElement("script");
                                script.innerHTML = 'function upperCase'+ index +'() {\n '+
                                    'var x = new Array();\n'+
                                    'x['+ index +'] = document.getElementById("id_vacxin'+ index +'").value;\n'+
                                    'var xhttp = new XMLHttpRequest();\n'+
                                    'xhttp.onload = function() {\n'+
                                    'var gia_thanh =new Array(); gia_thanh['+ index +'] = this.responseText;\n'+
                                    ' var y = new Array(); y['+ index +'] = document.getElementById("so_luong'+ index +'").value;\n'+
                                    'document.getElementById("demo'+ index +'").value = y['+ index +'] * gia_thanh['+ index +'];\n'+
                                    '}\n xhttp.open("GET", "get.php?q="+ x['+ index +']);'+
                                    'xhttp.send();\n }'; 
                                document.getElementById("btnChon").appendChild(script);
                                document.getElementById("index").value = index;
                                }
                                document.getElementById("index").value = index;
                                

                                
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
