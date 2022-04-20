-- Drop banco de dados
-- drop Database projeto01;

-- Criação do banco de dados
create database projeto01;

-- Selecionar banco de daddos
use projeto01;

-- Criação da tabela usuario 
create table usuario (
id_usuario   int  not null auto_increment,
nome_usuario varchar(100) not null,
email_usuario varchar(100) not null,
telefone_usuario varchar(30) not null,
primary key (id_usuario)
); 