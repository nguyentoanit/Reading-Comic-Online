<?php
$sql = "select *from gopy";
$gopy = new PDOcon();
$result = $gopy->exe($sql);
if(isset($_REQUEST['id'])){
	$id=$_REQUEST['id'];
	$delete = "delete from gopy where gopy_id=".$id;
	$gopy->del($delete);
	echo "<script>location.href='?trang=gopy';</script>";
}
?>
    <div id="wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Trang góp ý</h1>
                        <h1 class="page-subhead-line">Tổng hợp những góp ý, phản ánh của bạn đọc.</h1>

                    </div>
                </div>
                
             
                <!-- /. ROW  -->
            <div class="row">
                
                <div class="col-md-12">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Danh sách góp ý của bạn đọc
                        </div>
                        
                        <div class="panel-body admin-gopy">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên người góp ý</th>
                                            <th>Chủ đề</th>
                                            <th>Nội dung</th>
											<th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$i=1;
											foreach($result as $row){
										?>
										<tr>
											<td><?php echo $i++; ?></td>
											<td style="width:15%"><?php echo $row['gopy_name']; ?></td>
											<td style="width:15%"><?php echo $row['gopy_category'];; ?></td>
											<td><?php echo $row['gopy_content']; ?></td>
											<td style="width:7%"><a href="?trang=gopy&action=delete&id=<?php echo $row['gopy_id']; ?>"><i class="fa fa-trash"></i></a></td>
										</tr>
										<?php
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
       
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
