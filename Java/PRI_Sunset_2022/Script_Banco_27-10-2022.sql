create table autor (
	idAutor serial not null,
	nome varchar(30),
	idade int,
	tempoCarreira int,
	constraint pk_autor primary key (idAutor)
);

create table livro (
	idLivro serial,
	ISBN int not null UNIQUE,ok
	dtaPublicacao varchar(10),ok
	idioma varchar(30),ok
	tituloLivro varchar(30),ok
	localPublicacao varchar(30),
	sinopse varchar(300),ok
	temaLivro varchar(30),
	editoraLivro varchar(30),
	constraint pk_idLivro primary key(idLivro)
);

create table livroAutor ( 
	idLivroAutor serial,
	idAutor int not null,
	idLivro int not null, 
	idade int,
	nome varchar(30),
	tempoCarreira int,
	sinopse varchar(150),
	idioma varchar(30),
	dtaPubli int,
	tituloLivro varchar(30),
	temaLivro varchar(30),
	localPubli varchar(30),
	editoraLivro varchar(30),
	constraint pk_idLivroAutor primary key(idLivroAutor),
	constraint fk_idAutor FOREIGN KEY (idAutor) references Autor (idAutor),
	constraint fk_idLivro FOREIGN KEY (idLivro) references Livro (idLivro)
);