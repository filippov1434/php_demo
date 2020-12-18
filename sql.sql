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

//Добавление столбца в таблицу MYSQL
ALTER TABLE Employees 
ADD COLUMN middle_name CHAR(10) NULL 
AFTER first_name;
                                        
                                        
                                        
//Чтение записей
SELECT <перечисление полей> FROM <таблица>
SELECT id, email, password FROM users;

                                        
                                        
//Поиск-чтение с условием
SELECT <перечисление полей> FROM <таблица>
WHERE <имя поля> <оператор> <значение>
                                                                 
SELECT id, email, password FROM users
WHERE email = 'vasya@mail.ru';

//Операторы
= != > < 
IN()нахождение в списке
IS NULL проверка
LIKE нестрогий поиск
BETWEEN ..AND ..                                        

                                        
 //Сортировка
SELECT * FROM categories ORDER BY name ASC

//Запись данных
INSERT INTO <название таблицы>
SET <имя столбца1> = <значение2>, <имя столбца2> = <значение2>

INSERT INTO users
SET email = 'vasya@mail.ru', password = 'secret';

                                        
                                        
//Обновление записей
UPDATE <таблица> SET <имя столбца1> = <значение2>
WHERE <имя столбца> = <значение>                     
                                        
UPDATE users SET password = 'strongsecret’
WHERE email = 'vasya@mail.ru';                                        
                              

//Удаление записей  DELETE FROM                                      
DELETE FROM <таблица> WHERE <имя столбца> = <значение>                                        
DELETE FROM users WHERE email = 'vasya@mail.ru';                                        
                                        

                                        
//Обобщение  GROUP BY                                      
SELECT colname, SUM(cnt) FROM table GROUP BY colname                                        
  
                                        
//ОБЪЕДИНЕНИЯ JOIN                                        
SELECT <перечисление полей> FROM <таблица1>
JOIN <таблица2> ON <условие объединения>                                        
                                        
SELECT c.id, email, content FROM comments c
JOIN users u
ON c.user_id = u.id;                                        

    
                                        
                                        
//Индексы
CREATE INDEX <имя индекса> ON <таблица>(<поле>)                                        
CREATE INDEX c_text ON comments(content);                                  
                                        
CREATE UNIQUE INDEX <имя индекса> ON <таблица>(<поле>)         
CREATE UNIQUE INDEX email ON users(email);                                        
                                        
                                        
