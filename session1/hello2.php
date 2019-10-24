<h2>bai3</h2>
<?php
	echo "Ten:";
	$Fullname='linh';
	echo $name;
	echo"<br>";
	echo"So dien thoai:";
	$phone='01234567';
	echo $phone;
	echo"<br>";
	echo"Que Quan:";
	$address='Quang Nam';
	echo $add;
	echo"<br>";
?>
<h2>bai3</h2>
<?php
$month=2;
$year=2019;
if($month>12)
	{
		echo"khong phai thang trong nam";
	}
	else
	{
		echo" la thang trong nam-";
		switch($month)
		{
	   case 1: 
	     echo"thang 1 co 31 ngay";
	     break;
	   case 2:
	     if($year%4 == 0 && $year%100 !=0 || $year % 400 == 0) echo"thang 2 co 29 ngay";
	     else
	        echo"thang 2 co 28 ngay";
	    break;
	   case 3:
	   	echo"thang 3 co 31 ngay";
	   	break;
	   	case 4:
	   		echo"thang 4 co 30 ngay";
	   	break;
	   	case 5:
	   		echo"thang 5 co 31 ngay";
	   	break;
	   	case 6:
	   		echo"thang 6 co 30 ngay";
	   	break;
	   	case 7:
	   		echo"thang 7 co 31 ngay";
	   	break;
	   	case 8:
	   		echo"thang 8 co 31 ngay";
	   	break;
	   	case 9:
	   		echo"thang 9 co 30 ngay";
	   	break;
	   	case 10:
	   		echo"thang 10 co 31 ngay";
	   	break;
	   	case 11:
	   		echo"thang 11 co 30 ngay";
	   	break;
	   	case 12:
	   		echo"thang 12 co 31 ngay";
	   	break;
	   	default:
	        echo 'Không tìm thấy';
	    break;
	    }
	}
?>

