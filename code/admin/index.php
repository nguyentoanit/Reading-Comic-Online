<?php
session_start();
if(!isset($_SESSION['username'])){
	echo "<script>alert('Bạn phải đăng nhập trước!');location.href='login.html';</script>";
}
include('../include/class.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang quản trị</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic,700,700italic,800,300&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Đọc truyện Online</a>
            </div>

        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                          
                          
                                Xin chào,<strong>
									<?php echo $_SESSION['fullname']; ?>
								</strong></br>
								<a href="logout.php" style="color: #000;"><strong>Đăng xuất</strong></a>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Trang chủ</a>
                    </li>
					<li>
						<a href="?trang=theloai"><i class="fa fa-camera-retro"></i>Thể loại</a>
					</li>
					<li>
						<a href="?trang=quanly"><i class="fa fa-book"></i>Quản lý truyện</a>
					</li>
					<li>
						<a href="?trang=gopy"><i class="fa fa-comments-o"></i>Góp ý</a>
					</li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
						<?php
							if(isset($_REQUEST['trang'])){
								switch($_REQUEST['trang']){
									case 'gopy':
										include('include/gopy.php');
										break;
									case 'theloai':
										include('include/theloai.php');
										break;
									case 'quanly':
										include('include/quanly.php');
										break;
								}
							}else {
						?>
                        <h1 class="page-head-line">Chào mừng bạn đến với trang quản trị!</h1>
                        <h1 class="page-subhead-line">Bạn có thể thêm, sửa, xoá truyện. Xem những góp ý của bạn đọc hoặc thống kê truyện theo thể loại.</h1>
						<?php
							}
						?>
                    </div>
                </div>
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2015 Mr. G | Design By : <a href="http://www.fb.com/cristianotoanhd" target="_blank">Nguyễn Toàn</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>