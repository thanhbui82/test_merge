<?php
function abc(){
	assert("1 > 2");
	return "BBBBB";
}
$test = abc();
echo $test;
?>
