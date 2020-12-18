<?php
// ПРОСТЫЕ МАССИВЫ

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
?>







// АССОЦИАТИВНЫЕ МАССИВЫ
<?php
$gif = [
	'gif' => '/uploads/preview_gif58d28ce80e3a9.gif',
	'title' => 'Енотик',
	'likes_count' => 0
];
// Добавить новое значение с ключом
$gif['author'] = "frexin";

// Получить значение по ключу
print($gif['title']);

// Получить все ключи из массива
$keys = array_keys($gif);

// Получить последний ключ
$last_key = array_pop($keys);

// Получить значение по этому ключу
$last_val = $gif[$last_key];

?>








//ДВУМЕРНЫЕ МАССИВЫ
<?php
$first_gif = [
	'gif' => '/uploads/preview_gif58d28ce80e3a9.gif',
	'title' => 'Енотик',
	'likes_count' => 0
];

$second_gif = [
	'gif' => '/uploads/preview_gif58d29cfc805a2.gif',
	'title' => 'Кот-доминатор',
	'likes_count' => 0
];

// Создаем двумерный массив
$gif_list = [$first_gif, $second_gif];

$gif_list = [
	[
		'gif' => '/uploads/preview_gif58d28ce80e3a9.gif',
		'title' => 'Енотик',
		'likes_count' => 0
	],
	[
		'gif' => '/uploads/preview_gif58d29cfc805a2.gif',
		'title' => 'Кот-доминатор',
		'likes_count' => 0
	]
];



// Обращение к значениям в двумерном массиве
print($gif_list[0]['title']);


// Получаем случайный индекс
$rand = array_rand($gif_list, 1);
