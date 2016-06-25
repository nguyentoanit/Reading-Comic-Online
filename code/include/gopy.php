<div class="col-lg-12">
<p class="index-title">Mục góp y</p>
<p>Thông tin góp ý của bạn sẽ được hoàn thàn giữ bí mật. Những thông tin bạn góp ý sẽ chỉ được sử dụng với mục đich duy nhất là nâng cao chất lượng dịch vụ.
Trân trọng cảm ơn.
</p>
<div class="col-lg-6">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.701496428655!2d105.93217131429142!3d21.004599486011436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a8d214020c61%3A0xc6e29714d643123b!2zSOG7jWMgdmnhu4duIE7DtG5nIG5naGnhu4dwIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1443505146742" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col-lg-6" id="gopy">
	<form class="form-group" method="POST">
    	<label>Họ tên:</label>
    	<input type="text" class="form-control" name="hoten" required placeholder="Nhập tên..." />
        <label>Chủ đề:</label>
        <input type="text" class="form-control" required name="chude" placeholder="Nhập chủ đề..." />
        <label>Nội dung:</label>
        <textarea placeholder="Nhập nội dung" name="noidung" class="form-control"></textarea>
		<input type="submit" value="Gửi" class="btn btn-primary" name="guigopy"></input>
		<input type="reset" class="btn btn-warning" name="huygopy" value="Huỷ"/>
	</form>
<?php 
	if(isset($_REQUEST['guigopy'])){
		$hoten = $_REQUEST['hoten'];
		$chude = $_REQUEST['chude'];
		$noidung = $_REQUEST['noidung'];
		$sql = "INSERT INTO gopy (gopy_name,gopy_category,gopy_content) VALUES
			('$hoten','$chude','$noidung');
		";
		$gopy = new PDOcon();
		$stmt = $gopy->con->prepare($sql);
		$stmt->execute();
		echo "<script>alert('Cảm ơn $hoten đã góp ý!');</script>";
	}
?>
</div>
</div>