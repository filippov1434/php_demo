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
