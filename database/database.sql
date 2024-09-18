
CREATE TABLE secao(
    Id_secao int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome_secao varchar(100) NOT NULL
);

CREATE TABLE modulos(
    Id_modulo int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Secao_id int,
    Nome_modulo varchar(100) NOT NULL,
    Imagem_modulo BLOB NOT NULL,
    FOREIGN KEY (Secao_id) REFERENCES secao(Id_secao)
);

INSERT INTO secao  (Id_secao, Nome_secao) VALUES
(1, 'Bebidas'),
(2, 'Cereais');

INSERT INTO modulos (Secao_id, Nome_modulo, Imagem_modulo) VALUES 
(1, 'Refrigerante', '/home/diego/Downloads/secaoExemplo.jpg'), 
(1, 'Cerveja', '/home/diego/Downloads/secaoExemplo.jpg'),
(2, 'Arroz', '/home/diego/Downloads/secaoExemplo.jpg'),
(2, 'Oleo', '/home/diego/Downloads/secaoExemplo.jpg');