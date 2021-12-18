create database store;

use store;

create table items (
department varchar(40) primary key,
item varchar(225),
quartity int, 
address varchar(225)
);