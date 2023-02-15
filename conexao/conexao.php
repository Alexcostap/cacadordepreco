<?php
            // Teste de conexão com banco de dados 'cacadordepreco'

    try{
        // Tentando conectar...
        
        $conexao = new PDO ("mysql:host=localhost;port=3306;dbname=cacadordepreco;","root","");
        //$conexao = new PDO ("mysql:host=localhost;port=3306;dbname=cacadordepreco;","cacador_user","C@cador2023");
    }catch(PDOExecption $e){
        // Caso a conexão não ocorra...

        echo"Sua conexão com banco de dados não foi possível". $e -> getMessage();
    }

?>