
<?php include 'conexao.php';
$query = 
"DROP DATABASE IF EXISTS PETFREE;

CREATE DATABASE PETFREE;

USE PETFREE;

CREATE TABLE animal(
    id int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50) NOT NULL,        
    caracteristicas varchar(120) NOT NULL
    );
    
CREATE TABLE gerente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) NOT NULL,
    telefone char(11) NOT NULL,
    email varchar(70) NOT NULL,
    senha varchar(50) NOT NULL
    );

CREATE TABLE candidato(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50),
	telefone char(11) NOT NULL,
	endereco varchar(70) NOT NULL,
    email varchar(70) NOT NULL,
    animal int NOT NULL,
	constraint fkanimal FOREIGN KEY(animal) REFERENCES animal(id)
); 
    
CREATE TABLE foto(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomeArquivo varchar(50) NOT NULL,
    postador INT NOT NULL,
    animal INT NOT NULL,
    constraint fk_ANIMAL FOREIGN KEY(animal) REFERENCES animal(id),
    constraint fk_POSTADOR FOREIGN KEY(postador) REFERENCES gerente(id)
    );";
$query1 = "
insert into gerente(nome,telefone,email,senha) values('italo','996776026','asdkjsda','qwerty');
";mysqli_query($con,$query);
mysqli_query($con,$query1);
?>
