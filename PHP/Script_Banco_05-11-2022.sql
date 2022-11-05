create table autor (
	idAutor serial not null,
	nome varchar(30),
	idade int,
	tempoCarreira int,
	constraint pk_autor primary key (idAutor)
);

select * from autor;


create table livro (
	idLivro serial,
	ISBN int not null UNIQUE,
	dtaPublicacao varchar(10),
	idioma varchar(30),
	tituloLivro varchar(30),
	localPublicacao varchar(30),
	sinopse varchar(300),
	temaLivro varchar(30),
	editoraLivro varchar(30),
	constraint pk_idLivro primary key(idLivro)
);

select * from livro;


create table livroAutor ( 
	idLivroAutor serial,
	idAutor int not null,
	idLivro int not null, 
	constraint pk_idLivroAutor primary key(idLivroAutor),
	constraint fk_idAutor FOREIGN KEY (idAutor) references Autor (idAutor),
	constraint fk_idLivro FOREIGN KEY (idLivro) references Livro (idLivro)
);

select * from livroAutor;


create table bibliotecaria (
	nome varchar(30),
	prontuario varchar(30),
	email varchar(100),
	senha varchar(100),
	idBibliotecaria serial not null,
	constraint pk_bibliotecaria primary key (idBibliotecaria)
);

select * from bibliotecaria;

insert into bibliotecaria values
('Bibliotecaria 1', 'vp3008665', 'bibliotecaria1@ifsp.edu.br', 'ifsp2022');

