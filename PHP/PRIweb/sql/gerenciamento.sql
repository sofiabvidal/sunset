CREATE TABLE gerenciamento(
	idgerenciamento SERIAL,
	idbibliotecaria INTEGER,
	prontuariousuario VARCHAR(9),
	dtaHora TIMESTAMP,
	tipo VARCHAR(100),
	CONSTRAINT pk_gerenciamento PRIMARY KEY (idgerenciamento),
	CONSTRAINT fk_bibliotecaria FOREIGN KEY (idbibliotecaria) REFERENCES bibliotecaria ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT fk_usuario FOREIGN KEY (prontuariousuario) REFERENCES usuario ON UPDATE CASCADE ON DELETE CASCADE
);