<?php
            // Teste de conexão com banco de dados 'cacadordepreco'

    try{
        // Tentando conectar...
        // FALTA COLOCAR O USUÁRIO E SENHA NA CRIAÇÃO DO BANCO
        $conexao = new PDO ("mysql:host=localhost;port=3306;dbname=cacadordepreco;","root","");
    }catch(PDOExecption $e){
        // Caso a conexão não ocorra...

        echo"Sua conexão com banco de dados não foi possível". $e -> getMessage();
    }

?>