<?php

$i = 1;
while ($i <= 5) {
    //если остаток от деления на 2 == 1//
   if ($i % 2 == 1) {
       echo $i++ . ',';
   } else {
       echo ++$i * $i . ',';
   }
}
/*
выводим 1 т.к 1 % 2 == 1, прибавляем +1 после вывода
далее прибавляем +1($i==3) и умножаем на $i(3*3=9), выводим 9
далее выводим $i == 3, после чего прибавляем +1($i==4)
после этого прибавляем +1($i==5) и умножаем на $i(5*5=25), выводим 25
далее выводим $i == 5, после чего прибавляем +1($i==6)
из чего можем наблюдаем последовательность:
при нечетном итераторе выводится сам итератор (имеем ввилу что итератор каждый цикл увеличивается на 1) 
а при четном итераторе выводится итератор +1 умноженный на самого себя
*/
function sklonenie($number)
{
    $titles = ['программист', 'программиста', 'программистов'];
    $value = $number % 100;
    //берем последние 2 цифры
    //если больше 20, то берем последнюю цифру
    if ($value > 19) 
		$value = $value % 10; 
    //далее производим склонение в зависимости от последней цифры
    switch ($value) {
        case 1:
            return $number . " " . $titles[0];
        case 2:
        case 3:
        case 4:
            return $number . " " . $titles[1];
        default:
            return $number . " " . $titles[2];
    }

}

echo sklonenie(1677334235) . PHP_EOL;


$tree = array(
    'level 1' => array('level 1.1', 'level 1.2'),
    'level 2',
    'level 3' => array('level 3.1', 'level 3.2' => array('level 3.2.1', 'level 3.2.2'), 'level 3.3'),
    'level 4' => array('level 4.1', 'level 4.2', 'level 4.3', 'level 4.4'),
 );


    function drawTree($tree, $level = 0)
    {
        foreach ($tree as $key => $value) {
            if (is_array($value)) {
                echo str_repeat(' ', $level * 4) . $key . PHP_EOL;
                drawTree($value, $level + 1);
            } else {
                echo str_repeat(' ', $level * 4) . $value . PHP_EOL;
            }
            $level++;
        }
    }
    drawTree($tree);
   
?>