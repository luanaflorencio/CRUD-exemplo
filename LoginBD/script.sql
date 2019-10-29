drop database if exists cadastrouser;
create database if not exists cadastrouser;

use cadastrouser;

create table users (
    nome varchar(25),
    sobrenome varchar(50),
    email varchar(50),
    password varchar(20),
    id integer primary key auto_increment
);