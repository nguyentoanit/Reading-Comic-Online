<?php
	/*
	class TrangChu{
		public function TrangChu(){
			
		}
		public function sql($category){
			$sql="SELECT * FROM truyen where truyen_category='".$category."' ORDER BY truyen_id desc LIMIT 8";
			return $sql;
		}
		public function display($sql){
			$kq=mysql_query($sql);
			while($row=mysql_fetch_array($kq)){
				echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>";
				echo "<div class='intro'>";
				echo "<a href='?trang=theloai&id=".$row['truyen_id']."'>"."<img src='".$row['truyen_images']."'></img></a>";
				echo "<h4><a href='?trang=theloai&id=".$row['truyen_id']."'>".$row['truyen_name']."</a></h4>";	
				echo "Tác giả: <strong>".$row['truyen_author']."</strong>";
				echo "</div>";
				echo "</div>";
			}
		}
	}
	class thongke{
		var $value;
		var $width;
		
		function thongke(){
			
		}
		function countcategory($category){
			$sql="SELECT * FROM truyen where truyen_category = '".$category."' ;";
			$result = mysql_query($sql);
			$row1=mysql_num_rows($result);
			//--------------------------
			$sql2="SELECT * FROM truyen ;";
			$result = mysql_query($sql2);
			$row2 = mysql_num_rows($result);
			$this ->value = round(($row1/$row2)*100,2);
			$this ->width = $this->value."%";
		}
	}
	*/
	class PDOcon{
		public $con;
		var $value;
		var $width;
		function __construct(){
			try {
				//$this->con = new PDO('mysql:host=127.0.0.1;dbname=u106235580_toan;charset=utf8', 'u106235580_toan', '123456');
				$this->con = new PDO('mysql:host=localhost;dbname=truyen;charset=utf8', 'root', '');
				}
				catch (PDOException $e){
				echo 'Connection failed: ' . $e->getMessage();
				}
		}
		public function sql($category){
			$sql="SELECT * FROM truyen where truyen_category='".$category."' and truyen_status = 1 ORDER BY truyen_id desc LIMIT 8";
			return $sql;
		}
		public function display($sql){
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			foreach($result as $row){
				echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>";
				echo "<div class='intro'>";
				echo "<a href='?trang=theloai&id=".$row['truyen_id']."'>"."<img src='".$row['truyen_images']."'></img></a>";
				echo "<h4><a href='?trang=theloai&id=".$row['truyen_id']."'>".$row['truyen_name']."</a></h4>";	
				echo "Tác giả: <strong>".$row['truyen_author']."</strong>";
				echo "</div>";
				echo "</div>";
			}
		}
		function countcategory($category){
			$sql="SELECT * FROM truyen where truyen_status = 1 AND truyen_category = '".$category."' ;";
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			$row1 = $stmt->rowCount();
			$sql2="SELECT * FROM truyen where truyen_status = 1;";
			$stmt = $this->con->prepare($sql2);
			$stmt->execute();
			$row2 = $stmt->rowCount();
			$this->value = round(($row1/$row2)*100,2);
			$this->width = $this->value."%";
		}
		function exe($sql){
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
		function del($sql){
			echo "<script>/*if(confirm('Bạn có muốn xoá không?')){*/";
			$stmt = $this->con->prepare($sql);
			$stmt->execute();
			echo "alert('Xoá thành công');//}</script>";
		}
	}
?>