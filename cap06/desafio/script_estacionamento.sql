CREATE TABLE veiculos (
    id				INTEGER AUTO_INCREMENT PRIMARY KEY,
    placa			VARCHAR(10) NOT NULL,
    marca			VARCHAR(50) NOT NULL,
    modelo			VARCHAR(50) NOT NULL,
    hora_entrada	DATE,
    hora_saida		DATE
);

INSERT INTO veiculos(placa, marca, modelo, hora_entrada, hora_saida)
VALUES('HGX9893', 'Peugeot', '206', '2022-12-28', '2022-12-29');

SELECT * FROM veiculos;

INSERT INTO veiculos(placa, marca, modelo, hora_entrada, hora_saida)
VALUES('GUE8125', 'Honda', 'Fan', '2023-01-01', '2023-01-03');
