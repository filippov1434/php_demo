<?php
echo '<br> Week 1 Tasks <br>';


// 1. Connect to DB with PDO
echo '<br> <h3>1. Реализация структуры и подключение к базе</h3> <br>';
$dsn = 'mysql:dbname=treedb; host=127.0.0.1:3306';
$user = 'root';
$password = 'root';


try {
	$pdo = new PDO($dsn, $user, $password);
	echo "Connection success! <br>";
} catch(PDOException $e){
	echo "Ops, Connection error here!  ".$e -> getMessage();
};



//Внесение тестовых данных
/*

INSERT INTO treetable ('id','node_name', 'parent_id', 'man_id') VALUES
	(1, 'Проректоры', 0, 1),
	(2, 'Деканаты', 1, 1),
	(3, 'Кафедры', 2, 1),
	(4, 'ФРНГМ', 2, 1),
	(5, 'Проректор по научной работе', 1, 2),
	(6, 'Кафедра физики', 2, 1),
    (7, 'Компании', 0, 1),
    (8, 'Газпром', 7, 1)
*/


//Получение данных
echo '<br> <h3>2. Получение и вывод данных из базы</h3> <br>';

$sql_get_tree = 'SELECT *
    FROM treetable
    WHERE id > :idmin';

$query_get_tree  = $pdo->prepare($sql_get_tree);
$query_get_tree->execute([':idmin'=>0]);
$tree_array = $query_get_tree->fetchAll();


print("Количество элементов в массиве ".count($tree_array)."<br>");
print_r($tree_array);
echo '<br>';
//Вывод данных 
/*
print('<br> <h3>3. Вывод дерева не JSON</h3> ');

foreach ($result as $arr) {
   print($arr['node_name']."<br>");
}
echo '<br>';

*/

$arr_of_nodename = array();
foreach ($tree_array as $arr) {
   $arr_of_nodename[]= $arr['node_name'];

}

echo '<br>';
//print_r($arr_of_nodename);

function printArrayInJson (Array $arr) {

	$json = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
	return (print("<br> Вывод данных в JSON ".$json."<br>"));
}

printArrayInJson($arr_of_nodename);
printArrayInJson($tree_array);

/*
print('<br> <h3>Вывод дерева JSON</h3> ');
$json_tree = json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
print($json_tree);


print('<br><h3>Вывод информации об узлах</h3>');
foreach ($result as $arr) {
   print("Имя узла ".$arr['node_name']."<br> Уровень вложенности ".$arr['parent_id']."<br> Ответственный ".$arr["man_id"]."<br><br>");
}

*/




function printNodeInfoJSON (array $array_pdo, string $node_name) {


	$json_node_info = json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
	return (print($json_node_info));
}



/*
print("<h3>JSON ENCODE</h3>");
$testarr1 = [1,2,3];
$testarr2 = [Один=>"One",2=>"two",3=>"three"];
$testarr3 = 
	[
		[1=>"One",2=>"two",3=>"three"],
		[4=>"Four",5=>"Five",6=>"Six"],
		[7=>"Seven",8=>"Eight",9=>"Nine"]
	];
$testarr4 = 
	[
		1 => [1=>"One",2=>"two",3=>"three"],
		2 => [4=>"Four",5=>"Five",6=>"Six"],
		3 => [7=>"Seven",8=>"Eight",9=>"Nine"]
	];

$json1 = json_encode($testarr1);
print("Обычный массив в джсон ".$json1);
print('<br>');
//print_r(json_decode($json1).'<br>');

$json2 = json_encode($testarr2, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
print("Ассоциативный массив в джсон ".$json2);
print('<br>');

$json3 = json_encode($testarr3);
print("Двумерный массив в джсон ".$json3);
print('<br>');

$json4 = json_encode($testarr4);
print("Двумерный ассоциативный массив в джсон ".$json4);
print('<br>');


print("<h3>JSON DECODE</h3>");

$decode_arr1 = json_decode($json1, true); // получим ассоциативный массив
print("<br> PRINT_R обычного массива <br>");
print_r($decode_arr1);


$decode_arr2 = json_decode($json2, true); // получим ассоциативный массив
print("<br> PRINT_R ассоциативного массива <br>");
print_r($decode_arr2);

$decode_arr3 = json_decode($json3, true); // получим ассоциативный массив
print("<br> PRINT_R двумерного массива <br>");
print_r($decode_arr3);

$decode_arr4 = json_decode($json4, true); // получим ассоциативный массив
print("<br> PRINT_R двумерного ассоциативного массива <br>");
print_r($decode_arr4);
//3. Query to get tree
/*


$sql = 'SELECT *
    FROM CHARACTER_SETS
    WHERE MAXLEN = :MAXLEN';

$query = $pdo->prepare($sql);

$query

print_r($query);
print('<br>');

print('<br>');
print('Тестим fetch All');
$result = $query->fetchAll();
var_dump($result);

print('<br>');
print('Тестим fetch');
$result1 = $query->fetch();
var_dump($result1);


print('<br>');
print("Количество элементов в массиве ".count($result));

print('<br>');
foreach ($result as $arr) {
   print("Значение: ". $arr['CHARACTER_SET_NAME']." ");
}

print('<br><br>');


*/





/*
Работающий запрос
print('<br>');

$sql = 'SELECT *
    FROM CHARACTER_SETS
    WHERE CHARACTER_SET_NAME = :CHARACTER_SET_NAME';

$query = $pdo->prepare($sql);

$query->execute(array(':CHARACTER_SET_NAME' => 'utf8'));

print_r($query);
print('<br>');

$result = $query->fetchAll();
print_r($result);

print('<br>');
print("Количество элементов в массиве ".count($result));
*/



//*/
// converting to JSON
// and print the tree from JSON

//4. Query to get info about node 
// converting to JSON
// print from JSON

//5. Query to update node's info


?>
