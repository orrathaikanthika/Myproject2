<?php
//--switch01.php
$username="webmaster";
switch($username)
 {
 case "manager":
	echo"ยินดีต้อนรับคุณ $username คุณคือผุ้จัดการ";
	break;
 Case "admin":
	echo"ยินดีต้อนรับคุณ $username คุณคือผุ้ดูแลระบบ";
	break;
 Case "webmaster":
	echo "ยินดีต้อนรับคุณ $username คุณคือผุ้ดูแลเว็บไซต์";
	break;
 default:
	echo "ยินดีต้อนรับคุณ $username คุณคือผุ้ใช้งาน";
}	
?>