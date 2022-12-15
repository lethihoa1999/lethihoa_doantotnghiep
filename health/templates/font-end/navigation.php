<style>
    .h6-nav{
    color: black !important;
    margin-top: -12%;
    margin-left: 20%;
    font-size: inherit;
    } 
</style>
<?php
@session_start();
?>
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu pb-40" data-widget="tree">
                    <li>
                        <a href="index.php">
                            <i data-feather="monitor"></i>
                            <span>TRANG CHỦ</span>
                        </a>
                    </li>
                    <li>
                        <a href="introduce.php">
                            <i data-feather="home"></i>
                            <span>GIỚI THIỆU</span>
                        </a>
                    </li>
                    <li>
                        <a href="register_vacxin.php">
                            <i data-feather="file-plus"></i>
                            <span>ĐĂNG KÝ TIÊM</span>
                        </a>
                    </li>
                    <li>
                        <a href="history_register_vacxin.php">
                            <i data-feather="file-plus"></i>
                            <span>LỊCH SỬ ĐĂNG KÝ TIÊM</span>
                        </a>
                    </li>

                    <!-- <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>TÌNH TRẠNG VACXIN <br> &emsp; &nbsp; &nbsp; TẠI CÁC CƠ SỞ</span>
                            <span class="pull-right-container">
						<i class="fas fa-angle-right"></i>
					</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 1: Hà Nội</a></li>
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 2: Thanh Hóa</a></li>
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 3: Nghệ An</a></li>
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 4: Quảng Trị</a></li>
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 5: Tp. Hồ Chí Minh</a></li>
                            <li><a href="vacxin_status.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cơ sở 6: Bình Dương</a></li>
                        </ul>
                    </li> -->

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>TIÊM CHỦNG CHO TRẺ</span>
                            <span class="pull-right-container">
						<i class="fas fa-angle-right"></i>
					</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="vacxin_schedule_child.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lịch tiêm chủng cho trẻ em</a></li>
                            <li><a href="package_vacxin_child.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gói vacxin cho trẻ em</a></li>
                            <li><a href="package_vacxin_pre_child.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gói vacxin cho trẻ tiền học đường</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="user-plus"></i>
                            <span>TIÊM CHỦNG CHO <br> &emsp; &nbsp; &nbsp; NGƯỜI LỚN</span>
                            <span class="pull-right-container">
						<i class="fas fa-angle-right"></i>
					</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="vacxin_schedule_adult.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lịch tiêm cho người vị thành niên <br>&emsp;&emsp;&emsp;&nbsp; và người lớn</a></li>
                            <li><a href="package_vacxin_adult.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gói tiêm cho người vị thành niên <br>&emsp;&emsp;&emsp;&nbsp; và thanh niên</a></li>
                            <li><a href="package_vacxin_mature.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gói tiêm cho người trưởng thành</a></li>
                            <li><a href="package_vacxin_pregnant.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gói tiêm cho phụ nữ chuẩn bị <br>&emsp;&emsp;&emsp;&nbsp; mang thai và mang thai</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a href="handbook.php">
                            <i data-feather="calendar"></i>
                            <span>CẨM NANG HỎI VÀ ĐÁP</span>
                        </a>
                    </li> -->
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="book-open"></i>
                            <span>CẨM NANG TIÊM CHỦNG</span>
                            <span class="pull-right-container">
						    <i class="fas fa-angle-right"></i>
					</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="information_before_vacxin.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Những điều cần biết trước tiêm</a></li>
                            <li><a href="information_after_vacxin.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Những điều cần biết sau tiêm</a></li>
                            <li><a href="information_proce_vacxin.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Quy trình tiêm chủng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="illnes.php">
                            <i data-feather="activity"></i>
                            <span>BỆNH HỌC</span>
                        </a>
                    </li>

                    <!-- <li class="treeview">
                        <a href="#">
                            <i data-feather="users"></i>
                            <span>Thông tin cá nhân</span>
                            <span class="pull-right-container">
						<i class="fas fa-angle-right"></i>
					</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="patient-details.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Thông tin cá nhân</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="information-adress.php">
                            <i data-feather="calendar"></i>
                            <span>Khai báo y tế</span>
                        </a>
                    </li>
                    <li>
                        <a href="ceftidication-covid.php">
                            <i data-feather="alert-triangle"></i>
                            <span>Chứng nhận tiêm chủng</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i data-feather="inbox"></i>
                            <span>Cẩm nang y tế</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i data-feather="package"></i>
                            <span>Giới thiệu phần mềm</span>
                        </a>
                    </li>
                </ul> -->


                
                <!-- <div class="sidebar-widgets">
                    <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                        <div class="text-center">
                            <img src="https://rhythm-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
                            <h4 class="title-bx text-primary">Make an Appointments</h4>
                            <a href="#" class="py-10 fs-14 mb-0 text-primary">
                                Best Helth Care here <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright text-center m-25">
                        <p><strong class="d-block">Sổ sức khỏe điện tử</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</aside>
