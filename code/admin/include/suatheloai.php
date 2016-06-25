<meta charset="utf-8" />
<?php
	include("../../include/class.php");
	$st = new PDOcon();
	$sql = "update theloai set theloai_name = '".$_REQUEST['theloai_ten_modify']."',theloai_id = '".$_REQUEST['theloai_id_modify']."' where stt =".$_REQUEST['stt'];
	$st->exe($sql);
	echo "<script>alert('Cập nhật thể loại thành công!');location.href='../index.php?trang=theloai';</script>"
?>