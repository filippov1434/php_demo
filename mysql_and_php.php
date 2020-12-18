<?php 

//подключение к БД
//mysqli_connect(<хост>, <пользователь>, <пароль>, <имябд>)
$con = mysqli_connect("localhost", "root", "","giftube");


//Проверка подключения
if ($con = false) {
   print("Ошибка подключения: ". mysqli_connect_error());
}
else {
   print("Соединение установлено");
// выполнение запросов
}


//Два основных вида запросов: Чтение(SELECT), Модификация (UPDATE,INSERT,DELETE)


//Добавление новой записи
//1. Сформировать SQL запрос
$sql ="INSERT INTO users SET email = 'developer@php.net', password = 'secret'";
//2. Выполнить SQL запрос
$result = mysqli_query($con, $sql);
//3. Проверить результат выполнения
if (!$result) {
  $error = mysqli_error($con); //последняя ошибка запроса
  print("Ошибка MySQL: ". $error);
}


//Получить идентификатор последней добавленной записи - первичный ключ (чтобы потом ссылать на эту запись)
if ($result) {
$last_id = mysqli_insert_id($con);
}


//Последовательность исполнения ЧТЕНИЯ ИЗ БД
//1. Формирование SQL запроса
//2. Выполнение запроса
//3. Получение объекта результата
//4. Преобразование объекта результата в двумерный массив

<?php
$con = mysqli_connect("localhost", "root", "","giftube");
$sql ="SELECT id, name FROM categories";
$result = mysqli_query($con, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
foreach ($rows as $row) {
   print("Категория: ". $row['name']);
}
