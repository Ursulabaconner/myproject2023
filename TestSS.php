<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["favanifood"] = "pizza";
print_r($_SESSION);

unset($_SESSION["favcolor"],$_SESSION["favanimal"]);
print_r($_SESSION);
/*$bar = 'yoy';
echo "$bar\n";

function foo(&$bar) 
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";*/

?>