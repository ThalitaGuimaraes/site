/* portfolios    
   imagem		   
   titulo          
   subtitulo       
   descricao       
create database if not exists agenciath;

use agenciath;

create table portfolios(
id int primary key auto_increment,
imagem varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);
