CREATE USER 'anv'@'localhost' IDENTIFIED BY 'f@tek';

CREATE DATABASE fatec;

USE fatec;

-- Só consegui rodar o comando removendo a parte "IDENTIFIED BY 'f@tek'"
GRANT ALL ON fatec.* TO 'anv'@'localhost' IDENTIFIED BY 'f@tek';

-- Criar tabela livros
USE fatec;
CREATE TABLE livros(
autor VARCHAR(20),
titulo VARCHAR(40),
area VARCHAR(16),
ano SMALLINT,
tombo CHAR(10),
INDEX(autor(20)),
INDEX(titulo(20)),
INDEX(area(4)),
INDEX(ano)) ENGINE MyISAM,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

-- Popular tabela livros
USE fatec;

INSERT INTO livros(autor,titulo,area,ano,tombo)
VALUES('Maria Margarida','PHP','Programacao','2017','1234567890');

INSERT INTO livros(autor,titulo,area,ano,tombo)
VALUES('Catarina Bertonha', 'MySQL','Programacao','2016','1234567891');

INSERT INTO livros(autor,titulo,area,ano,tombo)
VALUES('Maria Margarida','PHP','Programacao','2017','1234567892');

INSERT INTO livros(autor,titulo,area,ano,tombo)
VALUES('Catarina Bertonha','MySQL','Programacao','2016','1234567893');
