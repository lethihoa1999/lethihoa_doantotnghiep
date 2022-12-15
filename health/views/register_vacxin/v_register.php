<!-- Content Wrapper. Contains page content -->
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
            include_once("views/error.php");
            $errorClass = new CError();
            $errorClass->showError($done);
            $errorClass->showError($error);
            //Error::showError($error_1);
            ?>
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Đăng ký tiêm chủng</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home" style="color: black;" class="active">NGƯỜI LỚN</a></li>
                                <li><a data-toggle="tab" href="#menu1" style="color: black; margin-left: 20px; ">TRẺ EM</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active show">
                                    <?php
                                    include_once("views/register_vacxin/v_register_people.php")
                                    ?>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <?php
                                    include_once("views/register_vacxin/v_register_child.php")
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->