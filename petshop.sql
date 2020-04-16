CREATE SCHEMA petshop;
CREATE TABLE petshop.cliente(
	idCliente INT AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	senha VARCHAR(8) NOT NULL,
	PRIMARY KEY(idCliente)
);
CREATE TABLE petshop.funcionario(
	idFuncionario INT AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	senha VARCHAR(8) NOT NULL,
	PRIMARY KEY(idFuncionario)
);
CREATE TABLE petshop.animal(
	idAnimal INT AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	PRIMARY KEY(idAnimal)
);
CREATE TABLE petshop.servico(
	idServico INT(10) AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	preco FLOAT(10) NOT NULL,
	PRIMARY KEY(idServico)
);
CREATE TABLE petshop.agenda(
	idAgenda INT(10) AUTO_INCREMENT,
	data VARCHAR(10) NOT NULL,
	hora VARCHAR(10) NOT NULL,
	idCliente INT NOT NULL,
	idAnimal INT NOT NULL,
	idServico INT NOT NULL,
	PRIMARY KEY(idAgenda),
	FOREIGN KEY(idCliente) REFERENCES cliente(idCliente),
	FOREIGN KEY(idAnimal) REFERENCES animal(idAnimal),
	FOREIGN KEY(idServico) REFERENCES servico(idServico)
);
