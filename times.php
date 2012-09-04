<?php


function numberOfMinutes($time1,$time2){
	
	return abs((strtotime($time1)- strtotime($time2))/60);
}


function numberOfSeconds($time1,$time2){
	
	return abs(strtotime($time1)- strtotime($time2));
}


function numberOfDays($time1,$time2){
	
	return abs((strtotime($time1)- strtotime($time2))/(3600*24));
}



/*		TESTS		*/
$time1 = "2012-09-04 18:20:20";
$time2 = "2012-09-04 18:30:20";
echo "\n\n Secs between $time1 and $time2 ::> " . numberOfMinutes($time1,$time2) .' minutes';

$time1 = "2012-09-04 18:30:60";
$time2 = "2012-09-04 18:20:60";
echo "\n\n Secs between $time1 and $time2 ::> " . numberOfMinutes($time1,$time2).' minutes';

$time1 = "2012-09-04 18:20:20";
$time2 = "2012-09-01 18:20:20";
echo "\n\n Secs between $time1 and $time2 ::> " . numberOfMinutes($time1,$time2).' minutes';
echo "\n\n Days between $time1 and $time2 ::> " . numberOfDays($time1,$time2).' days';

echo "\n\n Secs between $time1 and $time2 ::> " . numberOfMinutes(date('r'),$time2).' minutes';
echo "\n";




?>


