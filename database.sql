create database orphanage;
use orphanage;

create table children (
	id_children int primary key auto_increment,
    name_children varchar(150),
    lastname_children varchar(150),
    blood_type varchar(3),
    age varchar(2),
    birthdate date,
    disease text,
    gender text
);



create table accounts (
	id_client int primary key auto_increment,
    email_client text,
    password_client text
);

SELECT * FROM accounts WHERE email_client='pedro@gmail.com'  AND password_client='1234';

DROP TABLE accounts;

INSERT INTO children (name_children, lastname_children, blood_type, age, birthdate, disease, gender)
VALUES ("Juan Diego", "Lopez Montoya", "O+", 17, "2005-06-18", "No one", "Male");

SELECT * FROM children;

SELECT * FROM accounts;