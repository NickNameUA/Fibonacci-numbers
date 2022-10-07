<?php 
session_start();
$maxAmount = $_POST['maxAmount'];
$_SESSION['maxAmount'] = $maxAmount;
if ($maxAmount == ''){
	$_SESSION['Message'] = 'Ви не ввели номер числа';
	header('Location: Index.php');
	exit;
};
if ($maxAmount == 0 || $maxAmount == 1){
	$_SESSION['Message'] = '0 ';
	header('Location: Index.php');
	exit;
};
if ($maxAmount < 0){
	$_SESSION['Message'] = 'Відємні числа не можливо порахувати';
	header('Location: Index.php');
	exit;
};
if (strlen($maxAmount) > 3){
	$_SESSION['Message'] = 'Надто велики чесло';
	header('Location: Index.php');
	exit;
};
$numbers = '0 1';
$Amount = 0;
$number = 0;
$number1 = 0;
$number2 = 1;
while ($Amount < $maxAmount - 2) {
	$number = $number1 + $number2;
	if ($number1 < $number2){
	$number1 = $number;
	}else{
		$number2 = $number;
	};
	$Amount += 1;
	$numbers = $numbers . ' ' . $number;
};
$_SESSION['Message'] = $numbers;
//Check number
header('Location: Index.php');
exit;
?>