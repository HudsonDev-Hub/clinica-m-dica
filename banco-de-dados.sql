CREATE TABLE consulta (
  id_consulta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  paciente_id_paciente INTEGER UNSIGNED NOT NULL,
  medico_id_medico INTEGER UNSIGNED NOT NULL,
  data_consulta DATE NULL,
  hora_consulta TIME NULL,
  descricao_consulta TEXT NULL,
  PRIMARY KEY(id_consulta),
  INDEX consulta_FKIndex1(medico_id_medico),
  INDEX consulta_FKIndex2(paciente_id_paciente)
);

CREATE TABLE medico (
  id_medico INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_medico VARCHAR(100) NULL,
  crm_medico VARCHAR(10) NULL,
  especialidade_medico VARCHAR(20) NULL,
  PRIMARY KEY(id_medico)
);

CREATE TABLE paciente (
  id_paciente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_paciente VARCHAR(100) NULL,
  cpf_paciente VARCHAR(14) NULL,
  dt_nasc_paciente DATE NULL,
  email_paciente VARCHAR(100) NULL,
  endereco_paciente VARCHAR(100) NULL,
  fone_paciente VARCHAR(20) NULL,
  sexo_paciente CHAR(1) NULL,
  PRIMARY KEY(id_paciente)
);

CREATE TABLE fila 
( 
  id_fila INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_fila varchar(100) NOT NULL, 
  horario_fila TIME DEFAULT NULL, 
  data_fila date DEFAULT NULL,
  especialidade_fila varchar(45) DEFAULT NULL,
  fone_fila varchar(20) DEFAULT NULL,  
  PRIMARY KEY(id_fila) 
);





