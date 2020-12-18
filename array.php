<?php

// объвление пустого массива
$categories = [];

// объвление массива со значениями
$categories = ["Животные", "Люди", "Наука"];

// добавить значение в конец
$categories[] = "Приколы";

// Добавить значение в начало массива без обновления
array_unshift($categories, "Спорт");
$categories = ["Животные", "Люди", "Наука"];

// Обновить значение первого элемента
$categories[0] = "Спорт";

// Удаление второго элемент массива unset
unset($categories[1]);

// создать массив из строки explode
$categories = explode(",", "Животные,Люди,Наука");

// массив нельзя прочитать как простую переменную
print($categories);

//информация для отладки
print_r($categories);

//Получениеи вывод первого элемента
$first = $categories[0];
print("Первое значение:" . $first);

// количество элементов в массиве
$num = count($categories);

// индекс последнего значения
$last_index = $num - 1;

// Проверка существования элемента по индексу ISSET()
$result = isset($categories[2]);


// Проверить существование элемента по его значению IN_ARRAY()
$result = in_array("Наука", $categories);


// Получить первый элемент и удалить его из массива ARRAY_SHIFT()
$first = array_shift($categories);
print("Первое значение: " . $first);


// Получить последний элемент и удалить его из массива ARRAY_POP
$last = array_pop($categories);
print("Последнее значение: " . $last);


// Объединить два массива в один ARRAY_MERGE
$categories = array_merge($categories, $new_cats);


// Отсортировать значения массива в алфавитном порядке
sort($categories);
