<?php

/*
***********************************************************

Topic   : Program to demonstrate array_map function in PHP.
Author  : Chpaone09®
Date    : Oct 25, 2020

************************************************************
*/

function check($s){
return  ($s*2);
}

$a = array(1,2,3,4);

$a1 = array_map("check",$a);
echo "<pre>";print_r($a1);

?>
