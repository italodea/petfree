
<?php include 'conexao.php';
$query = "
DROP DATABASE IF EXISTS ariolive_t2g2;

CREATE DATABASE ariolive_t2g2;

USE ariolive_t2g2;


CREATE TABLE animal(
    id int AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50) NOT NULL,        
    caracteristicas varchar(120) NOT NULL
    );
    
CREATE TABLE gerente(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) NOT NULL,
    email varchar(70) NOT NULL,
    senha varchar(50) NOT NULL
    );

CREATE TABLE candidato(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50),
	telefone char(15) NOT NULL,
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
insert into gerente(nome,telefone,email,senha) values('italo','','italo@gmail.com','italo');
";

$run1 = mysqli_query($con,$query);
$run2 = mysqli_query($con,$query1);

echo "run1:$query<br/>";
echo "run2:$run2";
?>
