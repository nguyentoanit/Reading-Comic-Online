<?php 
	include("include/header.php");
?>
<body>
	<?php
		include("include/class.php");
		$trangchu = new PDOcon();
		$menu = "select * from theloai";
		$result = $trangchu->exe($menu);
	?>
	<div id="header">
		<div class="container">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 logo" id="logo">
				<a href="index.php"><img src="images/logo.png" alt="Chưa có hình ảnh!"></img></a>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" id="search">
				<form class="form-group" action="index.php" method="GET" >
					<div class="searchbox">
						<input type="text" placeholder="Tìm kiếm truyện" required name="search-box" class="form-control"/>      
					</div>
					<div class="searchbutton">
						<button type="submit" class="btn btn-warning">Tìm kiếm</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-xs-12 menu" >
		<div class="container">
			<ul>
				<li><a href="?trang=trangchu">Trang chủ</a></li>
				<li id="hassub"><a href="#">Thể loại</a>
					<ul id="submenu">
						<?php
							$pre = "?trang=theloai&theloai=";
							foreach($result as $row){
						?>
							<li><a href="<?php echo $pre.$row['theloai_id']; ?>"><?php echo $row['theloai_name']; ?></a></li>
						<?php
							}
						?>
					</ul>
				</li>
				<li><a href="?trang=thongtin">Thông tin</a></li>
                <li><a href="?trang=faq">FAQ</a></li>
				<li><a href="?trang=gopy">Góp ý</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php
			if(isset($_REQUEST['trang'])){
				$link=$_REQUEST['trang'];
				switch($link){
				case "trangchu":
					include('include/body.php');
					break;
				case "theloai":
					if(isset($_REQUEST['theloai'])){
						include('include/theloai.php');
					}else {
						include ('include/article.php');
						include ('include/quangcao.php');
					}
					break;
				case "thongtin":
					include('include/thongtin.php');
					break;
				case "faq":
					include('include/faq.php');
					break;
				case "gopy":
					include('include/gopy.php');
					break;
				default:
					include('include/body.php');
					break;
				}
			}else if(isset($_REQUEST['search-box'])){
				include('include/timkiem.php');
				
			}else include('include/body.php');	
		?>
	
	</div>
	<div style="position: relative;">
	<div class="gotop">
		<a href="#header"><image src="images/icon_gototop.png"></image></a>
	</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="col-lg-3 logo">
				<a href="index.php"><img id="top" src="images/logo.png" alt="Chưa có hình ảnh!"></img></a>
	
			</div>
			<div class="col-lg-6 copyright">
				Tất cả các truyện trên site đều được đọc giả sưu tầm từ các nguồn trên mạng, chúng tôi không chịu bất cứ trách nhiệm nào về vấn đề bản quyền tác giả, nếu các bạn đọc truyện nào thấy có nội dung liên quan đến vấn đề chính trị hoặc có nội dung không lành mạnh vui lòng vào mục góp ý.
				Chân thành cảm ơn.
				<br>
				Bản quyền: <a href="#">Nguyễn Toàn</a>
				<br>
				Phiên bản: <b>2.4</b>
			</div>
			<div class="col-lg-3 social-bottom">
				<a href="https://www.facebook.com/CristianoToanHD"><img src="images/bg_fb.png"></img></a>
				<a href="https://plus.google.com/+ToànNguyễnVănIT"><img src="images/bg_gg.jpg"></img></a>
				<a href="#"><img src="images/bg_twitter.jpg"></img></a>
			</div>
		</div>
	</div>
</body>
<!--Đóng kết nối -->
<?php
$trangchu->con = "";
?>
</html>