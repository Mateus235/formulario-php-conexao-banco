drop Database siteClientes;
Create Database siteClientes; 

use siteClientes;

Create table formulario(
nomeCompleto varchar(100) not null,
email varchar(50) unique not null,
senha varchar(50) not null,
telefone int (11) not null,
genero varchar(20) not null,
dataNascimento date,
endereco varchar(100) not null,
cidade varchar(50) not null,
estado varchar(50) not null
);

