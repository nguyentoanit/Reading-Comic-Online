<?php
	$theloai = new PDOcon();
	$tl = $_REQUEST['theloai'];
	$sql = "SELECT theloai_name FROM theloai where theloai_id = '".$tl."'";
	$result = $theloai->exe($sql);
	$row = $result[0];
	$sql = "SELECT * FROM truyen where truyen_status = 1 and truyen_category = '".$tl."'";
		
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<p class="index-title"><?php echo $row['theloai_name']; ?></p>
</div>
<?php $theloai->display($sql); ?>