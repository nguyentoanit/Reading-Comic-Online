<meta charset="utf-8" />
<?php
	
	include("../../include/class.php");
	$tm = new PDOcon();
	$sql = "insert into theloai(theloai_id,theloai_name) values('".$_REQUEST['theloai_id']."','".$_REQUEST['theloai_name']."')";
	$tm->exe($sql);
	echo "<script>alert('Thêm mới thể loại thành công!');location.href='../index.php?trang=theloai';</script>"
?>