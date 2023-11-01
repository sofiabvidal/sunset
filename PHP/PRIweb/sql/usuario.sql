CREATE TABLE usuario (
	prontuario VARCHAR(9),
	nome VARCHAR(50),
	CONSTRAINT pk_usuario PRIMARY KEY(prontuario)
);

CREATE TABLE aluno (
	prontuario VARCHAR(9),
	curso VARCHAR(50),
	CONSTRAINT fk_usuario FOREIGN KEY (prontuario) 
	    REFERENCES usuario 
	    ON UPDATE CASCADE 
	    ON DELETE CASCADE,
	CONSTRAINT pk_aluno PRIMARY KEY (prontuario)
);

CREATE TABLE professor (
	prontuario VARCHAR(9),
	materia VARCHAR(50),
	CONSTRAINT fk_usuario FOREIGN KEY (prontuario) 
	    REFERENCES usuario 
	    ON UPDATE CASCADE 
	    ON DELETE CASCADE,
	CONSTRAINT pk_professor PRIMARY KEY (prontuario) 
);

CREATE TABLE servidor (
	prontuario VARCHAR(9),
	funcao VARCHAR(50),
	CONSTRAINT fk_usuario FOREIGN KEY (prontuario) 
	    REFERENCES usuario 
	    ON UPDATE CASCADE 
	    ON DELETE CASCADE,
	CONSTRAINT pk_servidor PRIMARY KEY (prontuario) 
);

INSERT INTO usuario VALUES ('vp3014291', 'Rebeca');
INSERT INTO aluno VALUES ('vp3014291', 'Informática');