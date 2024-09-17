<?php

//assert(true);
//assert(false);


//Написать рекурсивную функцию sumn рассчета суммы 1 + 2 + 3 + ... + n
function sumn($n)
{
    if($n == 1)
    {
        return 1;
    }
    return $n + sumn($n - 1);
}
assert(sumn(2) == 3);




//Написать функцию create_min_max_validator(int $min, int $max) которая возвращает функцию
//принимающую один аргумент, функция проверяет входит ли аргумент в диапазон от $min до $max включительно
function create_min_max_validator(int $min, int $max)
{
    return function ($value) use ($min, $max)
    {
        if(!($value < $min) && !($value > $max))
        {
            return true;
        }
        else {
            return false;
        }
    };
}
$validator = create_min_max_validator (2, 5);
assert($validator(3));
assert(!$validator(6));




//Написать функцию add_item($arr, $item), которая ничего не возвращает, но при этом добавляет в конец массива
//$arr элемент $item
$some_array = array();
function add_item (&$arr, $item)
{
    $arr[] = $item;
}
add_item($some_array, 'some value');
print_r($some_array);