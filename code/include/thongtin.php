<?php 
	$thongke = new PDOcon();
	$thongkesql = "select * from theloai";
	$result = $thongke->exe($thongkesql);
?>
	<div class="col-lg-12 col-md-12 col-sm col-xs-12">
	<p class="index-title">Trang thông tin</p>
	<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 infor-images">
		<img src="images/profile.jpg" class="img-rounded img-responsive" alt="Chưa có ảnh">
	</div>
	<div class=" col-lg-7 col-md-7 col-sm-6 col-xs-12 infor-author">
		<table>
			<tr>
				<td>Tác giả:</td>
				<td class="detail-author">Nguyễn Toàn</td>
			</tr>
			<tr>
				<td>Giới tính:</td>
				<td class="detail-author">Nam</td>
			</tr>
			<tr>
				<td>Ngày sinh:</td>
				<td class="detail-author">16/06/1994</td>
			</tr>
			<tr>
				<td>Skype:</td>
				<td class="detail-author"><a href="mailto:Nguyentoanit@hotmail.com">Nguyentoanit@hotmail.com</a></td>
			</tr>
			<tr>
				<td>Nickname:</td>
				<td class="detail-author">Toàn Gemini</td>
			</tr>
			<tr>
				<td>Câu nói ưu thích:</td>
				<td class="detail-author">
				Nếu bạn sinh ra trong nghèo khó, đó không phải là lỗi của bạn.
				Nhưng nếu bạn chết trong nghèo khó, thì đó là lỗi của bạn.
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<p class="index-title">Thống kê bài viết</p>
</div>
	<div class="row">
		<?php
			foreach($result as $row){
		?>
		<div class="col-lg-4 col-md-4 col-xs-6">
			<?php 
				$thongke -> countcategory($row['theloai_id']);
			?>
			<label><?php echo $row['theloai_name']; ?></label>
			<div class="progress">
				  <div class="progress-bar progress-bar-striped active" role="progressbar"
				  aria-valuenow="<?php echo $thongke->value; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $thongke->width; ?>">
					<?php echo $thongke->width; ?>
				  </div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	
</div>