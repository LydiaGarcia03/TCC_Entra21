CREATE DATABASE IF NOT EXISTS hcdigital;

USE hcdigitaL;

CREATE TABLE cuidador (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(250) NOT NULL,
    foto BLOB NULL,
    genero SET('M', 'F', 'O') NOT NULL,
    dt_nascimento DATE NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(128) NOT NULL, -- CRIP
    token_recuperacao CHAR(13) NULL,
    cep CHAR(9) NOT NULL, 
    end_numero VARCHAR(5) NULL,
    end_complemento VARCHAR(250) NULL,
    tel_cel CHAR(16) NOT NULL,
    num_coren CHAR()7 NOT NULL,
    valor_hora REAL NOT NULL,
    # Info acadêmica
    curso_formacao VARCHAR(250) NOT NULL,
    instituicao VARCHAR(250) NOT NULL,
    dt_ingresso DATE NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

CREATE TABLE contratante (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(250) NOT NULL,
    foto BLOB NULL,
    genero SET('M', 'F', 'O') NOT NULL,
    dt_nascimento DATE NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(128) NOT NULL, -- CRIP
    token_recuperacao CHAR(13) NULL,
    cep CHAR(9) NOT NULL,
    end_numero VARCHAR(5) NULL,
    end_complemento VARCHAR(250) NULL,
    tel_cel CHAR(16) NOT NULL,
    tel_res CHAR(14) NULL
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

CREATE TABLE servico (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    # Dados do paciente
    nome_paciente VARCHAR(250) NOT NULL,
    dt_nascimento_paciente DATE NOT NULL,
    genero_paciente SET('M', 'F', 'O') NOT NULL,
    tipo_servico SET('Infantil', 'Idoso', 'Enfermagem'),
    doenca_cronica BOOLEAN NOT NULL,
    doenca_cronica_descricao VARCHAR(250) NULL,
    deficiencia_fisica BOOLEAN NOT NULL,
    deficiencia_fisica_descricao VARCHAR(250) NULL,
    deficiencia_mental BOOLEAN NOT NULL,
    deficiencia_mental_descricao VARCHAR(250) NULL,
    descricao_geral VARCHAR(500) NULL,
    fk_id_contratante INT NOT NULL,
    qtd_horas_diarias INT NOT NULL,
    dias_servico VARCHAR(250) NOT NULL,
    estado BOOLEAN NULL,
    
    FOREIGN KEY(fk_id_contratante) REFERENCES contratante(id)
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';


CREATE TABLE servicos_cuidadores(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fk_id_servico INT NOT NULL,
    fk_id_cuidador INT NOT NULL,
    
    FOREIGN KEY (fk_id_servico) REFERENCES servico(id),
    FOREIGN KEY (fk_id_cuidador) REFERENCES cuidador(id)
) ENGINE = InnoDB DEFAULT CHARSET  = 'utf8';

-- CRIP de 128 caracteres é utilizado para sha512 que retorna 512 bits
-- 512 bits = 128 caracteres

INSERT INTO contratante VALUES 
    (DEFAULT, 'Lydia Garcia', NULL, 'F', '2002-01-03', 'lydiagarcia.chan@gmail.com', '5C63B0C8D48B70EBA12F932113BFEB8C3E9A2F56CA8307FC4A9F9E1349F7CDE361A128B1E40EB38CE37C9892C787A54F0D407854094E723D9A3089FF0EF8EEBD', NULL, '89115040', '2229', 'Fundos 2225', '47999340994', '4733322549');

-- Tokens de recuperação devem seguir um padrão
-- <6 números random> - <Encode de Base64 do tempo atual>
-- Assim, o token tem expiração na recuperação de senha
-- Quando senha é redefinida, token volta a ser NULL