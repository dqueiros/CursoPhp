CREATE TABLE contatos (
    id			INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome		VARCHAR(20) NOT NULL,
    telefone	VARCHAR(15) NOT NULL,
    email		VARCHAR(30) NOT NULL,
    descricao	TEXT NULL,
    nascimento	DATE  NULL,
    favorito	VARCHAR(1) NULL
);

INSERT INTO contatos(nome, telefone, email)
VALUES('João', '(31) 98387-4847', 'joao@hotmail.com');

SELECT * FROM contatos;

INSERT INTO contatos(nome, telefone, email)
VALUES('Maria', '(31) 97936-7319', 'Maria@hotmail.com');

INSERT INTO contatos(nome, telefone, email)
VALUES('José', '(31) 98121-5211', 'jose@hotmail.com');

INSERT INTO contatos(nome, telefone, email)
VALUES('Francisco', '(31) 96945-9648', 'francisco@hotmail.com');

SELECT * FROM contatos;

SELECT nome, telefone, email FROM contatos WHERE telefone = '(31) 98387-4847';

SELECT nome, telefone, email FROM contatos WHERE nome LIKE '%Jo%';

SELECT nome, telefone, email FROM contatos WHERE nome LIKE 'Jo';
