use well;
create table filmes(
	id integer auto_increment,
	nome varchar(45) not null,
	ano int not null,
	primary key (id)
)collate = utf8_general_ci;
drop table filmes;
select * from filmes;