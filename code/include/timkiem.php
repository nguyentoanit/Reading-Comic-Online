<?php
	$key = $_REQUEST['search-box'];
	$sql = "SELECT * FROM TRUYEN WHERE truyen_name like '%$key%'";
	$timkiem = new PDOcon();
	$stmt = $timkiem->con->prepare($sql);
	$stmt->execute();
	$count = $stmt->rowCount();
?>
<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
	<h3 align="center">KẾT QUẢ TÌM KIẾM</h3>
	<?php
		echo '<h4>Tìm thấy <b>'.$count.'</b> kết quả!</h4>';
		$timkiem ->display($sql);
	?>
	
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	<?php
		include('include/right.php');
	?>

</div>