<meta charset="utf-8" />
<?php
	
	include("../../include/class.php");
	$tm = new PDOcon();
	$name = $_FILES["file"]["name"];
	$tmp_name = $_FILES['file']['tmp_name'];
	$images="";
	if (!empty($name)) {
		if ($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png"){
			$location = '../../images/';
			move_uploaded_file($tmp_name, $location.$name);
			$images = "images/".$name;
		}else echo "Không đúng định dạng";
	}
	$sql = "insert into truyen(truyen_name,truyen_content,truyen_category,truyen_images,truyen_status,truyen_author) values('".$_REQUEST['ten']."','".$_REQUEST['noidung']."','".$_REQUEST['theloai']."','".$images."','".$_REQUEST['trangthai']."','".$_REQUEST['tacgia']."')";
	$tm->exe($sql);
	echo "<script>alert('Thêm mới truyện thành công!');location.href='../index.php?trang=quanly';</script>"
?>