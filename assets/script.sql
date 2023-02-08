CREATE DATABASE escola_a30n;
USE escola_a30n;

CREATE TABLE bairro(
    cod_bairro INT AUTO_INCREMENT,
    nome_bairro VARCHAR(45),
    PRIMARY KEY(cod_bairro)
);
 CREATE TABLE professor(
    cod_professor INT AUTO_INCREMENT,
    nome_professor VARCHAR(45),
    PRIMARY KEY (cod_professor)
 );
CREATE TABLE disciplina(
    cod_disciplina INT AUTO_INCREMENT,
    nome_disciplina VARCHAR(45),
    PRIMARY KEY(cod_disciplina)
);
CREATE TABLE curso(
    cod_curso INT AUTO_INCREMENT,
    nome_curso VARCHAR(45),
    PRIMARY KEY(cod_curso)
);

 CREATE TABLE curso_tem_disciplina(
    curso INT,
    disciplina INT, 
    FOREIGN KEY(curso) REFERENCES curso(cod_curso),
    FOREIGN KEY(disciplina) REFERENCES disciplina(cod_disciplina)
 );
CREATE TABLE turma (
    num_turma INT AUTO_INCREMENT,
    professor_turma VARCHAR(45),
    curso_turma INT,
    PRIMARY KEY (num_turma),
    FOREIGN KEY(curso_turma) REFERENCES curso(cod_curso)
);

CREATE TABLE aluno (
    matricula INT AUTO_INCREMENT,
    nome_aluno VARCHAR(90),
    bairro_aluno INT,
    turma_aluno INT,
    PRIMARY KEY(matricula),
    FOREIGN KEY(bairro_aluno) REFERENCES bairro(cod_bairro),
    FOREIGN KEY(turma_aluno) REFERENCES turma(num_turma) 
);


CREATE TABLE usuario(
    id_usuario INT AUTO_INCREMENT,
    usuario VARCHAR(45),
    email VARCHAR(75),
    senha VARCHAR (6),
    PRIMARY KEY (id_usuario)
);


INSERT INTO bairro(nome_bairro) VALUES ("Alogoinha"),("Asa Sul"),("Asa Noirte"),("Lago Sul"),("Lago Norte");
INSERT INTO disciplina(nome_disciplina) VALUES("HTML"),("CSS"),("Javascript"),("PHP"),("MySQL"),("Java SE"),("Java EE");
INSERT INTO curso(nome_curso) VALUES ("Web design"),("Frontend"),("Backend"),("Web developer"), ("DBA"),("Programacão");
 
    ALTER TABLE usuariO ADD bairro INT;
    ALTER TABLE usuario ADD FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro);
    ALTER TABLE bairro(bairro,cidade_bairro) VALUES ("Candangolandia,1");
ALTER TABLE professor ADD bairro INT;
ALTER TABLE professor ADD FOREIGN KEY (bairro) REFERENCES bairro(cod_bairro);

 
    print"<select name='bairro'>";
    foreach ($conn->query($sql)as $row) {
        print "<option value='".$row['cod_bairro']. "'>".$row['bairro']."</option>";
    }
    print"</select>";
    }
    cath(PDOException $ex)}
        echo 'Erro'. $ex->getMessage();
    }
    ?></br></br>
      <label>CPF: </label>
      <input type="text" name="CPF">
      <nav class="botoes">input type="submit" VALUE="Cadastrar"></nav>
    </fieldset></form></div></div></body></html>


SELECT cod_curso FROM curso ORDER BY  cod_curso DESC LIMIT 1;