<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
session_start();
$_SESSION['username'] = $_REQUEST['username'];
$_SESSION['password'] = $_REQUEST['password'];
include ('../include/class.php');
$index = new PDOcon();
$check = 'select account_name from account where account_user = "'.$_SESSION['username'].'" and account_password = "'.$_SESSION['password'].'"';
$stmt = $index->con->prepare($check);
$stmt->execute();
if($stmt->rowCount()){
	$result = $stmt->fetchAll();
	$_SESSION['fullname'] = $result[0]['account_name'];
	echo "<script>alert('Bạn đã đăng nhập thành công!');location.href='index.php'</script>";
}
else echo "<script>alert('Tài khoản hoặc mật khẩu không chinh xác!');location.href='login.html';</script>";
?>
</body>
</html>
