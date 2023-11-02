create table emprestimo (
	idemprestimo serial,
	dtaemprestimo date,
	dtadevolucao date,
	prontuariousuario VARCHAR(9),
	idexemplar integer,
	statusemprestimo boolean,
	constraint pk_emprestimo primary key (idemprestimo),
	constraint fk_usuario foreign key (prontuariousuario) references usuario on update cascade on delete cascade,
	constraint fk_exemplar foreign key (idexemplar) references exemplar on update cascade on delete cascade
);