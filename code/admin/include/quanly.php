<?php
$quanly = new PDOcon();
$sql = "select * from truyen";
$result = $quanly->exe($sql);
$display = 'style="display:none"';
if(isset($_REQUEST['action'])){
	switch($_REQUEST['action'])
	{
		case 'delete':
			$delete = "delete from truyen where truyen_id =".$_REQUEST['id'];
			$quanly->del($delete);
			echo "<script>location.href='index.php?trang=quanly';</script>";
			break;
		case 'modify':
			$display = "";
			$modify = 'select * from truyen where truyen_id ='.$_REQUEST['id'];
			$modify = $quanly->exe($modify);
			break;
	}
}
$cat = "select * from theloai";
$catresult = $quanly->exe($cat);
?>
	<div id="wrapper">
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý truyện</h1>
                        <h1 class="page-subhead-line">Cho phép thêm, sửa, xoá truyện</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
					<div class="col-md-12"<?php echo $display; ?>>
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa truyện</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suatruyen.php" enctype="multipart/form-data">
									<input type="text" name="id" class="form-control" value="<?php echo $modify[0]['truyen_id']; ?>" style="display:none" />
									<label>Tên truyện:</label>
									<input type="text" name="ten-modify" class="form-control" placeholder="Nhập tên truyện..." value="<?php echo $modify[0]['truyen_name']; ?>" required />
									<label>Thể loại:</label>
									<select name="theloai-modify" class="form-control">
										<?php
											foreach($catresult as $cat){
										?>
										<option value="<?php echo $cat['theloai_id']; ?>"><?php echo $cat['theloai_name']; ?></option>
										<?php
												
											}
										?>
									</select>
									<label>Nội dung:</label>
									<textarea name="noidung-modify" class="form-control" placeholder="Nhập nội dung truyện..." rows="5" required><?php echo $modify[0]['truyen_content']; ?></textarea>
									<label>Hình ảnh:</label>
									<input type="file" name="file-modify" />
									<label>Tác giả:</label>
									<input type="text" name="tacgia-modify" class="form-control" placeholder="Tên tác giả..." value="<?php echo $modify[0]['truyen_author']; ?>"/>
									<label>Trạng thái:</label>
									<select name="trangthai-modify" class="form-control">
										<option value="1">Hiện</option>
										<option value="0">Ẩn</option>
									</select>
									</br>
									<input type="submit" value="Cập nhật" class="btn btn-success" />
								</form>
							</div>
						</div>
					</div>
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           Danh sách truyện
                        </div>
                        <div class="panel-body admin-quanly">
						<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Tên truyện</th>
								<th>Thể loại</th>
								<th>Nội dung</th>
								<th>Hình ảnh</th>
								<th>Trạng thái</th>
								<th>Tác giả</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i=1;
								foreach($result as $row){
							?>
							<tr>
								<td style="width:3%"><?php echo $i++; ?></td>
								<td style="width:7%"><?php echo $row['truyen_name']; ?></td>
								<td style="width:7%"><?php echo $row['truyen_category'];; ?></td>
								<td><?php echo $row['truyen_content']; ?></td>
								<td><img src="<?php echo '../'.$row['truyen_images']; ?>" alt="Chưa có ảnh" /></td>
								<td><?php if($row['truyen_status']) echo "Hiện"; else echo "Ẩn"; ?></td>
								<td style="width:5%"><?php echo $row['truyen_author']; ?></td>
								<td style="width:7%">
									<a href="?trang=quanly&action=modify&id=<?php echo $row['truyen_id']; ?>"><i class="fa fa-wrench"></i></a>
									<a href="?trang=quanly&action=delete&id=<?php echo $row['truyen_id']; ?>"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>

                    </div>
                           </div>
						   <hr>
					<div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>Thêm truyện mới</strong>
                        </div>
                        <div class="panel-body">
                            <form class="form-group" method="POST" action="include/themmoitruyen.php" enctype="multipart/form-data">
								<label>Tên truyện:</label>
								<input type="text" name="ten" class="form-control" placeholder="Nhập tên truyện..." required />
								<label>Thể loại:</label>
								<select name="theloai" class="form-control">
								<?php
									foreach($catresult as $cat){
								?>
								<option value="<?php echo $cat['theloai_id']; ?>"><?php echo $cat['theloai_name']; ?></option>
								<?php
										
									}
								?>
								</select>
								<label>Nội dung:</label>
								<textarea name="noidung" class="form-control" placeholder="Nhập nội dung truyện..." required></textarea>
								<label>Hình ảnh:</label>
								<input type="file" name="file" />
								<label>Tác giả:</label>
								<input type="text" name="tacgia" class="form-control" placeholder="Tên tác giả..."/>
								<label>Trạng thái:</label>
								<select name="trangthai" class="form-control">
									<option value="1">Hiện</option>
									<option value="0">Ẩn</option>
								</select>
								</br>
								<input type="submit" value="Thêm mới" class="btn btn-danger" />
							</form>
						</div>
					</div>
				</div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        
        <!-- /. PAGE WRAPPER  -->
    </div>