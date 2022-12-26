create database blogPHP;
-- drop database blogPHP;
use blogPHP;

create table post(
	idPost int primary key auto_increment,
    tituloPost varchar(255),
    descricaoPost text,
    dataPost datetime,
    imgPost varchar(255),
    categoriaID int,
    produtorID int
);

-- select * from post where categoriaID = 1 limit 0, 10;

insert into post(tituloPost,descricaoPost,imgPost,dataPost,categoriaID, produtorID)values(
"Titulo 1","Descrição 1","3.jpg",now(),1,1);

insert into post(tituloPost,descricaoPost,imgPost,dataPost,categoriaID,produtorID)values(
"Titulo 2","Descrição 2","3.jpg",now(),2,2);

select * from post;

create table categoria(
idCategoria int primary key auto_increment,
nomeCategoria varchar(255)
);



insert into categoria(nomeCategoria)values("Desenvolvimento web");
insert into categoria(nomeCategoria)values("Designer");

select * from categoria;

select * from post where categoriaID = 1 limit 0, 10;

create table subcategoria(
idSubcategoria int primary key auto_increment,
nomeSubcategoria varchar(255)
);

select * from subcategoria;

insert into subcategoria(nomeSubcategoria)values("PHP");
insert into subcategoria(nomeSubcategoria)values("Photoshop");

create table produtor(
idProdutor int primary key auto_increment,
nomeProdutor varchar(255),
imgProdutor varchar(255),
descricaoProdutor varchar(255),
statusProdutor varchar(30)
);

insert into produtor(nomeProdutor,descricaoProdutor,imgProdutor,statusProdutor)
values("Diego Rodrigues","Descrição 45","3.jpg","admin");

insert into produtor(nomeProdutor,descricaoProdutor,imgProdutor,statusProdutor)
values("Jhenny"," Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste nisi mollitia officia omnis iure odit dolores reiciendis ducimus! Sequi tempora,
 nemo voluptatum itaque ipsam officiis rerum distinctio quidem? Dignissimos, mollitia.","3.jpg","admin");

