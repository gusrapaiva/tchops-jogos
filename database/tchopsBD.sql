create database tchopsjogos;
use tchopsjogos;

create table admin ( 	nome varchar(30),
						email varchar(30),
						senha char(8)
);

insert into admin values ('Gustavo Paiva', 'gustavo@gmail.com', 1234);

create table usuario (	nome varchar(30) not null,
						email varchar(30) unique not null,
                        id int not null auto_increment,
						senha char(8) not null,
						ativo bool not null,
                        primary key (id)
);
select * from usuario;
insert into usuario (nome, email, senha, ativo) values ('rogerio', 'rogerio@gmail.com', 1234, 1);
insert into usuario (nome, email, senha, ativo) values ('adeval', 'adeval@gmail.com', 1234, 1);      
insert into usuario (nome, email, senha, ativo) values ('gilbert', 'gilbert@gmail.com', 1234, 1);


create table jokenpo (	FKuser_id int,
						foreign key  (FKuser_id) references usuario (id),
                        vitoria int,
                        derrota int,
                        empate int
);  
select * from jokenpo;
insert into jokenpo values (1, 15, 8, 10);
insert into jokenpo values (2, 20, 12, 3);
insert into jokenpo values (3, 2, 14, 20);

create table parimpar (	FKuser_id int,
						foreign key (FKuser_id) references usuario (id),
						vitoria int,
						derrota int
);
select * from parimpar;
insert into parimpar values (1, 7, 2);
insert into parimpar values (2, 1, 8);
insert into parimpar values (3, 5, 8);


create table guessnum (	FKuser_id int,
						foreign key (FKuser_id) references usuario (id),
						acerto int,
						erro int
);
select * from guessnum;
insert into guessnum values (1, 1, 8);
insert into guessnum values (2, 6, 5);
insert into guessnum values (3, 10, 1);

create table forca (FKuser_id int,
					foreign key (FKuser_id) references usuario (Id),
					acerto int,
					erro int
                    );
select * from forca;
insert into forca values (1, 6, 2);
insert into forca values (2, 3, 3);
insert into forca values (3, 1, 5);