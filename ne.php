<?php
	$one = (time()-mktime(0, 0, 0, 7, 1, 2021))/(60*60*24);
echo $one."<br/>";
	$two = ceil($one/14);
	echo $two."<br/>";
	$three = $two*14;
	echo $three."<br/>";
	$four = strtotime("2021-07-1") + 3600 * 24 * $three;
	echo $four."<br/>";
	echo date("d m", $four)."<br/>";
      
    $currentDate = date("d m", $four);

    $_monthsList = array(
      " 01" => "января",
      " 02" => "февраля",
      " 03" => "марта",
      " 04" => "апреля",
      " 05" => "мая",
      " 06" => "июня",
      " 07" => "июля",
      " 08" => "августа",
      " 09" => "сентября",
      " 10" => "октября",
      " 11" => "ноября",
      " 12" => "декабря"
    );
 
	$_mD = date(" m"); //для замены
	$currentDate = str_replace($_mD, " ".$_monthsList[$_mD], $currentDate);
	echo $currentDate;
?>