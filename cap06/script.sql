CREATE TABLE tarefas (
    id			INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome		VARCHAR(20) NOT NULL,
    descricao	TEXT,
    prazo		DATE,
    prioridade	INTEGER(1),
    concluida	BOOLEAN
);

INSERT INTO tarefas(nome, descricao, prioridade)
VALUES('Estudar PHP', 'Continuar meus estudos de PHP E MySQL', 1);

SELECT * FROM tarefas;

INSERT INTO tarefas(nome, descricao, prioridade)
VALUES('Estudar HTML', 'HTML é importante!', 2);

INSERT INTO tarefas(nome, descricao, prioridade)
VALUES('Comprar leite', 'Desnatado', 1);

INSERT INTO tarefas(nome, descricao, prioridade)
VALUES('Arrumar as fotos das', 'Só quando der tempo', 3);

SELECT * FROM tarefas;

SELECT nome, descricao, prioridade FROM tarefas WHERE prioridade = 1;

SELECT nome, descricao, prioridade FROM tarefas WHERE nome LIKE '%php%';

SELECT nome, descricao, prioridade FROM tarefas WHERE nome LIKE 'php';
