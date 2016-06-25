<?php 
	$sql = "select * from theloai";
	$result = $trangchu->exe($sql);
?>
<div class="col-lg-9 col-md-9 col-xs-12">
			<section>
				<div class="col-lg-4 col-md-4 col-xs-12" id="truyenmoi" style="padding:0px;">
					<div class="title">
						<i class="fa fa-hourglass-start"></i>&nbsp;
						TOP TRUYỆN MỚI
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail">
					<?php
						$sql="SELECT * FROM truyen where truyen_status = 1 ORDER BY truyen_id desc LIMIT 8";
						$trangchu ->display($sql);
					?>
				</div>
			</section>
			<section>
			<?php
				foreach($result as $row){
			?>
			<div class="col-lg-4 col-md-4 col-xs-12" id="<?php echo $row['theloai_id']; ?>"	style="padding:0px;">
				<div class="title">
					<a href="?trang=theloai&theloai=<?php echo $row['theloai_id']; ?>"><i class="fa fa-smile-o"></i>&nbsp;<?php echo $row['theloai_name']; ?></a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail">
					<?php
						$trangchu ->display($trangchu->sql($row['theloai_id']));
					?>
				</div>
			<?php
				}
			?>
			</section>
			
</div>
<div class="col-lg-3 col-md-3 col-xs-12">
		<?php 
			include('include/right.php');
		?>
</div>
