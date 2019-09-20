CREATE DATABASE IF NOT EXISTS hcdigital;

USE hcdigitaL;

CREATE TABLE profissional (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(250) NOT NULL,
    foto BLOB NOT NULL,
    genero SET('M', 'F', 'O') NOT NULL,
    dt_nascimento DATE NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(128) NOT NULL, -- CRIP
    cep REAL NOT NULL, 
    end_numero INT NULL,
    end_complemento VARCHAR(250) NULL,
    tel_cel REAL NOT NULL,
    num_coren INT NOT NULL,
    # Dados bancários
    cod_banco VARCHAR(128) NOT NULL, -- CRIP
    num_agencia VARCHAR(128) NOT NULL, -- CRIP
    dig_agencia VARCHAR(128) NOT NULL, -- CRIP
    tipo_conta VARCHAR(128) NOT NULL, -- CRIP
    num_conta VARCHAR(128) NOT NULL, -- CRIP
    dig_conta VARCHAR(128) NOT NULL, -- CRIP
    num_cartao VARCHAR(128) NOT NULL, -- CRIP
    nome_user_cartao VARCHAR(128) NOT NULL, -- CRIP
    # Info acadêmica
    curso_formacao VARCHAR(250) NOT NULL,
    instituicao VARCHAR(250) NOT NULL,
    dt_ingresso DATE NOT NULL,
    avaliacao REAL NULL
) ENGINE = INNODB DEFAULT CHARSET = 'utf8';

CREATE TABLE necessitado (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(250) NOT NULL,
    foto BLOB NULL,
    genero SET('M', 'F', 'O') NOT NULL,
    dt_nascimento DATE NOT NULL,
    email VARCHAR(250) NOT NULL,
    senha VARCHAR(128) NOT NULL, -- CRIP
    cep REAL NOT NULL,
    end_numero INT NULL,
    end_complemento VARCHAR(250) NULL,
    tel_cel REAL NOT NULL,
    tel_res REAL NULL
) ENGINE = INNODB DEFAULT CHARSET = 'utf8';

CREATE TABLE servico (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    # Dados do paciente
    nome_paciente VARCHAR(250) NOT NULL,
    dt_nascimento_paciente DATE NOT NULL,
    genero_paciente SET('M', 'F', 'O') NOT NULL,
    tipo_servico SET('Infantil', 'Idoso', 'Enfermagem'),
    diabetico BOOLEAN NOT NULL,
    deficiencia_fisica BOOLEAN NOT NULL,
    deficiencia_mental BOOLEAN NOT NULL,
    hipertensao BOOLEAN NOT NULL,
    descricao_op VARCHAR(500) NULL,
    fk_id_necessitado INT NOT NULL,
    qtd_horas_diarias INT NOT NULL,
    dias_servico VARCHAR(250) NOT NULL,
    estado BOOLEAN NULL,
    # Dados bancários do necessitado
    cod_banco VARCHAR(128) NOT NULL, -- CRIP
    num_agencia VARCHAR(128) NOT NULL, -- CRIP
    tipo_conta VARCHAR(128) NOT NULL, -- CRIP
    num_conta VARCHAR(128) NOT NULL, -- CRIP
    dig_conta VARCHAR(128) NOT NULL, -- CRIP
    num_cartao VARCHAR(128) NOT NULL, -- CRIP
    nome_user_cartao VARCHAR(128) NOT NULL, -- CRIP
   
    FOREIGN KEY(fk_id_necessitado) REFERENCES necessitado(id)
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

-- CRIP de 128 caracteres é utilizado para sha512 que retorna 512 bits
-- 512 bits = 128 caracteres

INSERT INTO necessitado VALUES 
    (DEFAULT, 'Lydia Garcia', NULL, 'F', '2002-01-03', 'lydiagarcia.chan@gmail.com', '5C63B0C8D48B70EBA12F932113BFEB8C3E9A2F56CA8307FC4A9F9E1349F7CDE361A128B1E40EB38CE37C9892C787A54F0D407854094E723D9A3089FF0EF8EEBD', '89115040', '2229', 'Fundos 2225', '47999340994', '4733322549');