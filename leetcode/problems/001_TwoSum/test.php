<?php
require_once 'Solution.php';

$obj = new Solution();

echo("Case 1\n");
var_dump($obj->twoSum(array(2,7,11,15), 9));
echo("\n\n");

echo("Case 2\n");
var_dump($obj->twoSum(array(3,2,4), 6));
echo("\n\n");

echo("Case 3\n");
var_dump($obj->twoSum(array(3,3), 6));
echo("\n\n");

echo("Case 3\n");
var_dump($obj->twoSum(array(-1,-2,-3,-4,-5), -8));
echo("\n\n");

echo("Case 3\n");
var_dump($obj->twoSum(array(23,-2,-3,-4,20,-5,21,22,-1), -9));
echo("\n\n");


exit;
?>