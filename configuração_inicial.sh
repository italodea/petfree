#!/bin/bash

echo -n "IP do servidor[Ex:127.0.0.1]:";
read IP;

echo -n "Nome do usuario do MySQL[Ex:root]:";
read usuario;

echo -n "Senha do usuario do banco Mysql[vazio se não houver]:";
read -s senha;
echo
echo -n "Nome da tabela[recomendado:PETFREE]:";
read banco;

echo "<?php " '$con' "= mysqli_connect('$IP','$usuario','$senha','$banco');?>" > etc/conexao.php;

echo "Configurado com sucesso!";

sleep 2
echo ""> etc/configurarBD.php;
clear
echo -n "Nome do gerente:";
read nome_gerente;

echo -n "telefone do gerente (MAX 13 caracteres):";
read telefone_gerente;

echo -n "email do gerente:";
read email_gerente;

echo -n "senha do gerente:";
read -s senha_gerente;


echo "<?php include 'conexao.php';" >> etc/configurarBD.php
echo '$query = ' >> etc/configurarBD.php;
echo '"DROP DATABASE IF EXISTS $banco;

CREATE DATABASE $banco;

USE $banco;

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
    );";' >> etc/configurarBD.php;

echo '$query1 = "' >> etc/configurarBD.php;
echo "insert into gerente(nome,telefone,email,senha) values('$nome_gerente','$telefone_gerente','$email_gerente','$senha_gerente');" >> etc/configurarBD.php;
echo '";mysqli_query($con,$query);' >> etc/configurarBD.php;
echo 'mysqli_query($con,$query1);' >> etc/configurarBD.php;
echo "?>" >> etc/configurarBD.php;

php -f etc/configurarBD.php;

rm etc/configurarBD.php;