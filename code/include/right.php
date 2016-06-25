<?php
	$sql="SELECT truyen_name FROM truyen where truyen_status = 1";
	$right = new PDOcon();
	$stmt = $right->con->prepare($sql);
	$stmt->execute();
	$result = $right->exe($sql);
	$count = $stmt->rowCount();
	$numbers = range(1, $count);
	shuffle($numbers);
	$sqlds = "select * from theloai";
	$resultds = $right->exe($sqlds);
 ?>
<div class="right">
	<h4 class="title-right">Danh sách truyện</h4>
	<div class="content-right">
		<ul>
			<?php
				foreach($resultds as $rowds){
			?>
				<li><div class="glyphicon glyphicon-hand-right"></div><a href="#<?php echo $rowds['theloai_id']; ?>"><?php echo $rowds['theloai_name']; ?></a></li>
			<?php
				}
			?>
		</ul>
	</div>
	<h4 class="title-right">Facebook</h4>
	<div class="social">
		<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FCristianoToanHD&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:40px;" allowTransparency="true"></iframe>
	</div>
	<h4 class="title-right">Truyện đề cử</h4>
	<div class="content-right">
		<ul>
			<?php
				$i=0;
				foreach($numbers as $value){
					$sql="select truyen_name from truyen where truyen_id=".$value;
					$result = $right->exe($sql);
					$row = $result[0];
			?>
					<li><div class="glyphicon glyphicon-hand-right">&nbsp;</div><a href="?trang=theloai&id=<?php echo $numbers[$i]; ?>"><?php echo $row['truyen_name']; ?></a></li>
			<?php
					$i++;
					if($i > 4){
						break;
					}
				}
			?>
		</ul>
	</div>
	<h4 class="title-right">Quảng cáo</h4>
	<div class="ad">
	<img src="images/ad.png">
	</div>
</div>