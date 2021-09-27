CREATE DATABASE projetoCork;

USE projetoCork;

CREATE TABLE IF NOT EXISTS mensagens (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    assunto varchar(255) NOT NULL,
    mensagem varchar(255) NOT NULL,
    created datetime NOT NULL
);