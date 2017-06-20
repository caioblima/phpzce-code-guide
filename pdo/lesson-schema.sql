CREATE TABLE IF  NOT EXISTS permissao (
    id  INT(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    nome  VARCHAR(45) NOT NULL,
    usuarios_id INT(11) NOT NULL,
    INDEX fk_usuarios_id (usuarios_id  ASC),
    CONSTRAINT  fk_usuarios_id
    FOREIGN KEY (usuarios_id) 
        REFERENCES  usuarios (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);