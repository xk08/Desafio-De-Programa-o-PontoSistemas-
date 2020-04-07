/* 
Desenvolvido por Marcos Martins - 
    Script da base de dados + Inserção padrão de um valor
*/

CREATE DATABASE desafiops DEFAULT CHARACTER SET utf8 ;
USE desafiops ;

/* Definindo os campos da tabela do usuário */
CREATE TABLE usuarios (
    nome          VARCHAR(255) NOT NULL,
    idade         INT,
    email         VARCHAR(255) NOT NULL,
PRIMARY KEY (nome));

INSERT INTO usuarios VALUES ('Usuário Padrão',18,'usuario@padrao.com.br');