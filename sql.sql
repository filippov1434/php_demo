// Проектирование БД
//1. Выделить основные сущности в проекте (пользователи, гифки, книги, категории, комментарии и др.)
//2. Определить аттрибуты каждой сущности ( Название-строка, ссылка на изображение-строка, кол-во просмотров - число и др.)
//3. Определить связи между сущностями (гифка- пользователь, гифка-категория, комментарий - пользователь))
//4. Решить, какие понадобятся дополнительные таблицы
//5. Написать SQL код для создания всех таблиц

//Создание новой БД
CREATE DATABASE giftube
 DEFAULT CHARACTER SET utf8
 DEFAULT COLLATE utf8_general_ci;
 USE giftube;
 
 
 //Создание новой таблицы
CREATE TABLE users (
id       INT AUTO_INCREMENT PRIMARY KEY,
email    CHAR(128),
password CHAR(64)
);

                                        
//Чтение записей
SELECT <перечисление полей> FROM <таблица>
SELECT id, email, password FROM users;

                                        
                                        
//Поиск-чтение с условием
SELECT <перечисление полей> FROM <таблица>
WHERE <имя поля> <оператор> <значение>
                                        
//Операторы
=
                                        
                                        
SELECT id, email, password FROM users
WHERE email = 'vasya@mail.ru';

                                        
//Сортировка
SELECT * FROM categories ORDER BY name ASC

//Запись данных
INSERT INTO <название таблицы>
SET <имя столбца1> = <значение2>, <имя столбца2> = <значение2>

INSERT INTO users
SET email = 'vasya@mail.ru', password = 'secret';
