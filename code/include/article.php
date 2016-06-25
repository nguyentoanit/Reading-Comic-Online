<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 article">
<?php
	$article = new PDOcon();
	$id=$_REQUEST['id'];
	$sql="SELECT * FROM truyen where truyen_id = '".$id."'";
	$stmt = $article->con->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$row = $result[0];
	echo "<h2 class='index-title'>".$row['truyen_name']."</h2>";
	echo "<p style='text-align:right'>Tác giả: <strong>".$row['truyen_author']."</strong></p>";
	echo "<br>";
	echo "<p>".$row['truyen_content']."</p>";
?>
<div>
	<div class="fb-like"></div>
	<div class="fb-share-button" data-href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button_count"></div>
</div>
<div class="fb-comments" data-href="<?php echo 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="10"></div>
</div>