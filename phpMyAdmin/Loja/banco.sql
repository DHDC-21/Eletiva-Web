-- criando banco de dados
CREATE SCHEMA loja_ads_manha;
-- entrando no banco de dados
USE loja_ads_manha;

-- criando a tabela
CREATE TABLE `loja_ads_manha`.`produtos` (
    `codigo` INT(5) NOT NULL ,
    `descricao` VARCHAR(20) NOT NULL ,
    `qtd` INT(5) NOT NULL ) ENGINE = InnoDB;

SELECT * FROM produtos;