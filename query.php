
create database dbGlobal;

use dbGlobal;

create table adm(
	id_adm int not null identity primary key,
	nm_adm varchar(65) not null,
	nm_login varchar(65) not null unique,
	ds_senha varchar(65) not null,
);

create table funcionarios(
	id_funcionario int not null identity primary key,
	nm_funcionario varchar(65) not null,
	nm_cargo varchar(65) not null,
	nm_email varchar(65) not null unique,
	ds_telefone varchar(25) not null,
	ds_nascimento varchar(65) not null,
);

INSERT INTO adm (nm_adm, nm_login, ds_senha) VALUES ('Tiago', 'tiago-vsj@hotmail.com', '123');
INSERT INTO adm (nm_adm, nm_login, ds_senha) VALUES ('Dani', 'dani@456', '456');
