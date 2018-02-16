<?php
echo "Please, put the size\n";
$handle = fopen ("php://stdin","r");
$length = fgets($handle);
$width = fgets($handle);

$board = range(1,$length*$width);
for($i = 0; $i<($length*$width); $i++)
{
    if ($board[$i]%2 == 0){
        $board[$i] = "_";
    }
    else{
        $board[$i] = "#";
    }
}

foreach ($board as $key=>$i) {
    if (($key + 1) % $length == 0) {
        echo PHP_EOL;
    } else {
        echo $i;
    }
}
