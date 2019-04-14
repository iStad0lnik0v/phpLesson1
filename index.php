<?php

phpinfo();
// for($i= 0; $i < 0; $i++) {
//
//     echo  'i= ' .$i.PHP_EOL;
// }
//
// $j=10;
//
//
// while($j=0) {
//
//     echo 'j='.$j;
//     $j--;
// }

$arr = ['Вася', 'Николай', 'Василий', 'Igor', 'petia', 'Robokop', 'Bambo', 'Terminator'];

function iteratorName($arr)
{
    foreach ($arr as $index => $row) {
        helloName($row);
    }
}

function helloName($row)
{
    echo ' row= ' . $row . PHP_EOL;
}


iteratorName($arr);