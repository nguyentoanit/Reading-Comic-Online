<meta charset="utf-8" />
<?php
	include("../../include/class.php");
	$st = new PDOcon();
	$name = $_FILES["file-modify"]["name"];
	$tmp_name = $_FILES['file-modify']['tmp_name'];
	$images_modify = "";
	if (!empty($name)) {
		if ($_FILES['file-modify']['type'] == "image/jpeg" || $_FILES['file-modify']['type'] == "image/png"){
			$location = '../../images/';
			move_uploaded_file($tmp_name, $location.$name);
			$images_modify = "images/".$name;
		}else echo "Không đúng định dạng";
	}
	$sql = "update truyen set truyen_name = '".$_REQUEST['ten-modify']."',truyen_content = '".$_REQUEST['noidung-modify']."',truyen_category = '".$_REQUEST['theloai-modify']."',truyen_author = '".$_REQUEST['tacgia-modify']."',truyen_status = '".$_REQUEST['trangthai-modify']."', truyen_images = '".$images_modify."' where truyen_id =".$_REQUEST['id'];
	
	$st->exe($sql);
	echo "<script>alert('Cập nhật truyện thành công!');location.href='../index.php?trang=quanly';</script>"
?>