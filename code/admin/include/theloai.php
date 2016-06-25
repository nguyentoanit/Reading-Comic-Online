<?php
	$tl = new PDOcon();
	$tlsql = 'select * from theloai';
	$tlresult = $tl->exe($tlsql);
	$display = 'style="display:none"';
	if(isset($_REQUEST['action'])){
		switch($_REQUEST['action'])
		{
			case 'delete':
				$delete = "delete from theloai where stt ='".$_REQUEST['stt']."'";
				$tl->del($delete);
				echo "<script>location.href='index.php?trang=theloai';</script>";
				break;
			case 'modify':
				$display = "";
				$modify = 'select * from theloai where stt='.$_REQUEST['stt'];
				$modify = $tl->exe($modify);
				break;
		}
	}
?>
    <meta charset="utf-8" />
    <div id="wrapper">
        <!-- /. NAV SIDE  -->
        <div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang quản lý thể loại truyện</h1>
                        <h1 class="page-subhead-line">Thêm sửa, xoá các thể loại</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
            <div class="row" <?php echo $display; ?>>
				<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
							   <strong>Sửa thể loại truyện</strong>
							</div>
							<div class="panel-body">
								<form class="form-group" method="POST" action="include/suatheloai.php" >
									<input type="text" name="stt" class="form-control" value="<?php echo $modify[0]['stt']; ?>" style="display:none" />
									<label>ID:</label>
									<input type="text" name="theloai_id_modify" class="form-control" value="<?php echo $modify[0]['theloai_id']; ?>"/>
									<label>Tên thể loại:</label>
									<input type="text" name="theloai_ten_modify" class="form-control" value="<?php echo $modify[0]['theloai_name']; ?>" required />
									</br>
									<input type="submit" value="Cập nhật" class="btn btn-warning" />
								</form>
							</div>
						</div>
					</div>
			</div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách thể loại truyện
                        </div>
                        <div class="panel-body admin-theloai">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Tên thể loại</th>
											<th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$i = 1;
											foreach ($tlresult as $row){
										?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td><?php echo $row['theloai_id']; ?></td>
											<td><?php echo $row['theloai_name']; ?></td>
											<td>
												<a href="?trang=theloai&action=modify&stt=<?php echo $row['stt']; ?>"><i class="fa fa-wrench"></i></a>
												<a href="?trang=theloai&action=delete&stt=<?php echo $row['stt']; ?>"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<?php
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            </div>
            <!-- /. PAGE INNER  -->
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Thêm mới thể loại
                        </div>
                        <div class="panel-body admin-theloai">
                            <form class="form-group" method="POST" action="include/themmoitheloai.php">
								<label>ID:</label>
								<input type="text" name="theloai_id" class="form-control" placeholder="Nhập ID thể loại..." required />
								<label>Tên thể loại:</label>
								<input name="theloai_name" class="form-control" placeholder="Nhập tên thể loại..." required />
								</br>
								<input type="submit" value="Thêm mới" class="btn btn-danger" />
							</form>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
