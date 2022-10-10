<?php 
session_start();
$maxAmount = $_POST['maxamount'];
$_SESSION['maxamount'] = $maxAmount;
if ($maxAmount == ''){
	$_SESSION['message'] = 'Ви не ввели номер числа';
	header('Location: Index.php');
	exit;
};
if ($maxAmount == 0 || $maxAmount == 1){
	$_SESSION['message'] = '0 ';
	header('Location: Index.php');
	exit;
};
if ($maxAmount < 0){
	$_SESSION['message'] = 'Відємні числа не можливо порахувати';
	header('Location: Index.php');
	exit;
};
if (strlen($maxAmount) > 3){
	$_SESSION['message'] = 'Надто велики чесло';
	header('Location: Index.php');
	exit;
};
$numbers = '0 1';
$amount = 0;
$number = 0;
$number1 = 0;
$number2 = 1;
while ($amount < $maxAmount - 2) {
	$number = $number1 + $number2;
	if ($number1 < $number2){
	$number1 = $number;
	}else{
		$number2 = $number;
	};
	$amount += 1;
	$numbers = $numbers . ' ' . $number;
};
$_SESSION['message'] = $numbers;
//Check number
header('Location: Index.php');
exit;
?>