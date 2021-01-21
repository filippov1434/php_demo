// 1. Connect to DB with PDO

$dsn = 'mysql:dbname=information_schema; host=localhost';
$user = 'root';
$password = '';


try {
	$pdo = new PDO($dsn, $user, $password);
	echo "Connection success!";
} catch(PDOException $e){
	echo "Ops, Connection error here! ".$e -> getMessage();
};

//2. Реализация запроса получения
$sql = 'SELECT *
    FROM CHARACTER_SETS
    WHERE MAXLEN = :MAXLEN';

$query = $pdo->prepare($sql);

$query->execute(array(':MAXLEN' => '4'));

$result = $query->fetchAll();
//Вывод
foreach ($result as $row) {
   print("Значение: ". $row['CHARACTER_SET_NAME']." ");
}
