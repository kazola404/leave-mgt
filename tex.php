<?php
function Dare($name,$sex,$age,$date,$marital,$country,$state){
	echo $name.'<br>'.$sex.'<br>'.'<b>'.$age.'</b>'.'<br>'.$date.'<br>'.'<br>'.'<br>'.$marital.'<br>'.$country.'<br>'.$state.'<br>'; 
}
Dare('Kazeem', 'male',30,'NOVEMBER','Single','Nigeria','Lagos');
?>

<?php
function add($number,$number1){
	$result = $number+$number1;
	return $result;
}

function divide ($number1,$number2,$number3){
	$result = $number1/$number2/$number3;
	return $result;
}
$sum = divide(add(110,10), add(10,50), add(30,20));
echo $sum.'<br>';


		$user_ip =  $_SERVER['REMOTE_ADDR'];
	echo $string =  "your Ip Address is :".$user_ip;
		function echo_ip() {

	$string  =  "your Ip Address is :".$user_ip;
}
$string_one = "this is the video of the event coming soon";
$string_two = "this is the video of the event coming soon";
similar_text($string_one, $string_two, $result);
 echo ".<br>.the similarity between the two is".'<br>'.$result;
?>