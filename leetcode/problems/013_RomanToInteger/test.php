<?php
require_once 'Solution.php';

$obj = new Solution();

echo("Case I is 1\n");
var_dump($obj->romanToInt('I'));
echo("\n\n");

echo("Case II is 2\n");
var_dump($obj->romanToInt('II'));
echo("\n\n");

echo("Case III is 3\n");
var_dump($obj->romanToInt('III'));
echo("\n\n");

echo("Case IV is 4\n");
var_dump($obj->romanToInt('IV'));
echo("\n\n");

echo("Case IX is 9\n");
var_dump($obj->romanToInt('IX'));
echo("\n\n");

echo("Case LVIII is 58\n");
var_dump($obj->romanToInt('LVIII'));
echo("\n\n");

echo("Case MCMXCIV is 1994\n");
var_dump($obj->romanToInt('MCMXCIV'));
echo("\n\n");

echo("Case DCXXI is 621\n");
var_dump($obj->romanToInt('DCXXI'));
echo("\n\n");

echo("Case MCMXCVI is 1996\n");
var_dump($obj->romanToInt('MCMXCVI'));
echo("\n\n");


?>