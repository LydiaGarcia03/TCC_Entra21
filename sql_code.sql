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
    num_coren CHAR(7) NOT NULL,
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
    qtd_func_necessarios INT NULL,
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

-- POPULANDO
INSERT INTO contratante VALUES
    (DEFAULT, 'Aline de Souza Spengler', NULL, 'F', '2001-05-11', 'alinespengler0511@gmail.com', '317449d4a6a1d8ae61e8dd94fa41141cc9150efaff9bc66d743caba7d862b8080edbf278fe04d34c65bc16fb8623a011c1f694aacdaa723c8d308510b5ac7c31', NULL, '89114-442', '442', 'Sobreado e casa', '(47) 9 9988-7414', '(47) 33321232'),
    (DEFAULT, 'João Hercílio Zucchi', NULL, 'M', '2001-09-15', 'johnthelegend@gmail.com', 'aa372b8f933c4a2ec7389ea20310e42bb2060a362f98f2c5709d786ec5d1f8d2e3de87af7a56926c514a185365b51c913f59422d7167fa9e4aadff76d3fae3d5', NULL, '89110-000', '1296', 'Casa acima das lojas', '(47) 9 9978-5263', '(47) 3332-1586'),
    (DEFAULT, 'Nicole Alice Vieira', NULL, 'F', '2001-11-08', 'vieiraalicenicole@gmail.com', '33989afc88493e0e655009d6dabacf14874c472684e28286e34822d450c3c6786fed55f80459c5924f3507f5ca165232b69994409ea804941906217851c3cd06', NULL, '89114-442', '4463', 'Casa de dois andares', '(47) 9 9998-5222', '(47) 3332-4895'),
    (DEFAULT, 'Andréia Silva de Oliveira', NULL, 'F', '1979-01-15', 'andreolli_2@gmail.com', '4fde986f0530f6170e8fdcbf059f24dfaff17c4c71a885b1973597d0b1702354c419a1b7f249f4f153029a62d102c0efde6c9f726075bf1d40910d48db173d67', NULL, '89115-040', '2229', 'Fundos 2225', '(47) 9 9938-6633', '(47) 3332-2549'),
    (DEFAULT, 'Eduardo Hostins Garcia', NULL, 'M', '1977-11-23', 'eduardo.h12@gmail.com', '8731984c3cfe59244eebb5b97f06e0ab84013074f24bff4a670b0a8b5105ff4dd5a7885924c73ab9decf3802b6a312c1bc66a65d0473b377d9b5e6b5578f59a3', NULL, '89115-040', '2229', 'Casa de dois andares', '(47) 9 9938-9988', '(47) 3332-2549'),
    (DEFAULT, 'Henrique Eduardo Spengler', NULL, 'M', '2001-03-11', 'henrique.gg@gmail.com', '5aa65dd32a8846729ed6ccbeb2278bccad8aefd3fc711a1c78d2cdaa9d01f9e6b6c4a5f16a3ea12e67e640d58f431a17a128d499deedc8f243bec5ed5a7b3c9d', NULL, '88320-000', '5896', 'Casa pequena', '(47) 9 9972-9663', '(47) 3332-8445'),
    (DEFAULT, 'Renato Muller Reinhold', NULL, 'M', '2000-07-30', 'renatinho@gmail.com', 'cc7e3128cf03f433c552f0ef12fd42d230cbbf4966d1109f83afc5c958e018c503a977d0de5cda6543aee9b158ecf09dc056306fd085164eda80ca4bc7738f31', NULL, '89114-442', '5200', 'Rua sem saída', '(47) 9 9934-8552', '(47) 3332-1008');

INSERT INTO cuidador VALUES
    (DEFAULT, 'João de Paula', NULL, 'M', '2000-12-05', 'joaoentra21@gmail.com', 'c0d5d09aaab80397d7dd4c00ea92dc4a259ae853eeb8b533042e999583a4467e277d0874eb76c1598e73261a0e821338f05388ac64a66ce27f8609e7eae33f6d', NULL, '89021-200', '7884', 'Rua sem saída', '(47) 9 9968-5443', '856.621', '6.5', 'Técnico em Enfermagem', 'UNIVALI', '2019-10-04', NULL);

-- Tokens de recuperação devem seguir um padrão
-- <6 números random> - <Encode de Base64 do tempo atual>
-- Assim, o token tem expiração na recuperação de senha
-- Quando senha é redefinida, token volta a ser NULL