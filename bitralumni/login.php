</php
//--login.php
@$name = $_POST['username'];
@$name = $_POST['pass1'];

if($namename=="admin"){
	echo"ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือผู้ดูแลระบบ";
	echo"<br><a href='admin/index.php'>ลิงค์ไปหน้าBackend </a>";
	}
elseif($username=="Orrathai"){
	echo "ยินดีต้อนรับคุณ" .$_POST['username']."คุณคือสมาชิกชมรม</a>";
	echo "<br> <a href='home/index.php'> ลิงค์ไปหน้าFrontend </a>
}
else  {
	echo "ยินดีต้อนรับคุณ" .$_POST['username']."คุณคือผู้ใช้งานทั่วไป";
	echo "<br> <a href='../'> ลิงค์ไปหน้าUser (myproject) </a>";
}
?>