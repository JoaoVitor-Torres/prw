-- Drop banco de dados
-- drop Database agenda;

-- Criação do banco de dados
create database prova2;

-- Selecionar banco de daddos
use prova2;

-- Criação da tabela usuario 
create table fluxocaixa (
id_fluxocaixa   integer      not null auto_increment,
data            date        not null,
tipo            varchar(10) not null,
valor           decimal(10,2) not null,
historico       varchar(150) not null,
cheque          varchar(3) not null, 
primary key (id_fluxocaixa)
); 