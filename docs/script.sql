CREATE TABLE `pilates`.`tb_pessoa` (
  `data_nascimento` DATE NOT NULL COMMENT 'Data de Nascimento',
  `sexo` CHAR(1) NOT NULL COMMENT 'M ou F',
  `cpf` VARCHAR(14) NOT NULL,
  `rg` VARCHAR(20) NULL,
  `email` VARCHAR(50) NULL,
  `celular` VARCHAR(16) NULL COMMENT '(##) #.####-####',
  `telefonel` VARCHAR(25) NULL COMMENT '(##) ####-####',
  UNIQUE INDEX `CPF_UNIQUE` (`cpf` ASC));

 CREATE TABLE pilates.tb_aluno (
	id INTEGER auto_increment NOT NULL,
	nome varchar(100) NOT NULL,
	CONSTRAINT tb_aluno_pk PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
