CREATE TABLE `modalidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `data` DATE NOT NULL COMMENT 'DATA DO CADASTRO',
  `status` CHAR(1) NOT NULL COMMENT 'A -> Ativo, E -> Excluído, T -> Todos'  
  PRIMARY KEY (`id`));

CREATE TABLE `professores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `dt_nascimento` DATE NOT NULL COMMENT 'DATA DE NASCIMENTO',
  `email` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `sexo` VARCHAR(10) NOT NULL,
  `celular` VARCHAR(15) NOT NULL COMMENT '(##)#.####-####',
  `telefone` VARCHAR(14) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `cidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  `uf` VARCHAR(2) NULL COMMENT 'EXEMPLO: PR/SP',
  PRIMARY KEY (`id`));

CREATE TABLE `enderecos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(200) NOT NULL COMMENT 'RUA/AVENIDA',
  `numero` INT NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `cep` VARCHAR(12) NOT NULL COMMENT '##.###-###',
  `celular` VARCHAR(15) NOT NULL COMMENT '(##)#.####-####',
  `email` VARCHAR(50) NOT NULL,
  `cidades_id` INT NOT NULL,
  PRIMARY KEY (`id`),
	CONSTRAINT `fk_enderecos_cidades` FOREIGN KEY (`cidades_id`) REFERENCES `cidades` (`id`)
)
COLLATE='utf8mb4_general_ci';

CREATE TABLE `alunos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `dt_nascimento` DATE NOT NULL COMMENT 'DATA DE NASCIMENTO',
  `sexo` VARCHAR(10) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL COMMENT '###.###.###-##',
  `enderecos_id` INT NOT NULL,
  `professores_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_alunos_enderecos1`
    FOREIGN KEY (`enderecos_id`)
    REFERENCES `enderecos` (`id`)
,
  CONSTRAINT `fk_alunos_professores1`
    FOREIGN KEY (`professores_id`)
    REFERENCES `professores` (`id`)
)COLLATE='utf8mb4_general_ci';

CREATE TABLE `forma_pagamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL COMMENT 'EXEMPLO: MENSAL(TAL VALOR), TRIMESTRAL(TAL VALOR), SEMESTRAL(TAL VALOR)',
  PRIMARY KEY (`id`));

CREATE TABLE `pagamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `valor` DOUBLE(10,2) NULL,
  `forma_pagamento_id` INT NOT NULL,
  `dt_vencimento` DATE NOT NULL COMMENT 'DATA DO VENCIMENTO PARA O PAGAMENTO MENSAL, SEMESTRAL, ETC...',
  `dt_pagamento` DATE NOT NULL COMMENT 'DIA QUE FOI PAGO A MENSALIDADE',
  `status_pagamento` VARCHAR(3) NOT NULL COMMENT 'MARCAR COM SIM OU NÃO - SIM SE FOI PAGO, NÃO SE NÃO FOI PAGO',
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_pagamentos_forma_pagamento1`
    FOREIGN KEY (`forma_pagamento_id`)
    REFERENCES `forma_pagamento` (`id`)
)COLLATE='utf8mb4_general_ci';


CREATE TABLE `aulas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_inicial` DATE NOT NULL COMMENT 'DIA INICIO DAS AULAS',
  `data_final` DATE NULL COMMENT 'ULTIMO DIA DA AULA, FINAL DA MATRÍCULO, EX: 01/01/21 ATÉ 01/06/21',
  `dias_semanas` VARCHAR(50) NOT NULL COMMENT 'PODE SER, SEG, TER, QUA, QUI, SEX, OU TODOS OS DIAS DA SEMANA',
  `hora` VARCHAR(2) NOT NULL COMMENT 'VAI SER SEMPRE 1 HORA POR DIA',
  `modalidades_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_aulas_modalides1`
    FOREIGN KEY (`modalidades_id`)
    REFERENCES `modalidades` (`id`)
)COLLATE='utf8mb4_general_ci';

CREATE TABLE `matriculas` (
  `ID` INT NOT NULL,
  `alunos_id` INT NOT NULL,
  `pagamentos_id` INT NOT NULL,
  `professores_id` INT NOT NULL,
  `aulas_id` INT NOT NULL,
  PRIMARY KEY (`ID`),
  CONSTRAINT `fk_matriculas_alunos1`
    FOREIGN KEY (`alunos_id`)
    REFERENCES `alunos` (`id`)
,
  CONSTRAINT `fk_matriculas_pagamentos1`
    FOREIGN KEY (`pagamentos_id`)
    REFERENCES `pagamentos` (`id`)
,
  CONSTRAINT `fk_matriculas_professores1`
    FOREIGN KEY (`professores_id`)
    REFERENCES `professores` (`id`)
,
  CONSTRAINT `fk_matriculas_aulas1`
    FOREIGN KEY (`aulas_id`)
    REFERENCES `aulas` (`id`)
)COLLATE='utf8mb4_general_ci';