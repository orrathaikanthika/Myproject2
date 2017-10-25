<?php
//--if03.php
$name="manager";
if($name=="manager")
{
	echo "ยินดีต้อนรับคุณ<font color='red'> $name</font> คุณคือผุ้จัดการ<br>";
	echo "<a href='http://www.arnut.com'>ไปเว็บArnut.com</a>";
	}elseif($name=="admin")
	{
	echo "ยินดีต้อนรับคุณ<font color='pink'> $name</font> คุณคิอผู้ดูแลระะบบ.";
	}elseif($name=="wedmaster")
	{
		echo"ยินดีต้อนรับคุณ $name คุณคือผู้ดูแลเว็บไซต์";
		}else
{
echo "ยินดีต้อนรับ คุณ $name คุณคือผู้ใช้งาน";
}		
?>
