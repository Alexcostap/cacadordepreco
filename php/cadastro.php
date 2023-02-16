<?php 

include "../conexao/conexao.php";

try{
        $nome = filter_var($_POST['nome']);
        $login = filter_var($_POST['login']);
        $senha = filter_var($_POST['senha']);
        $dataNascimento = filter_var($_POST['dataNascimento']);
        $cpf = filter_var($_POST['cpf']);
        $tipoUsuario = "pessoa_fisica";
        $estado = filter_var($_POST['estado']);
        $cidade = filter_var($_POST['cidade']);
        $bairro = filter_var($_POST['bairro']);
        $status = "1";

        $senhacrypto = md5($senha);

        $insert = $conexao->prepare("insert into clientes (nome, login, senha, data_nasc, cpf_cnpj, tipo_usuario, estado, cidade, bairro, status) 
        values (:nome, :login, :senha, :data_nasc, :cpf_cnpj, :tipo_usuario, :estado, :cidade, :bairro, :status )");
        $insert->bindParam(":nome", $nome);
        $insert->bindParam(":login", $login);
        $insert->bindParam(":senha", $senhacrypto);
        $insert->bindParam(":data_nasc", $dataNascimento);
        $insert->bindParam(":cpf_cnpj", $cpf);
        $insert->bindParam(":tipo_usuario", $tipoUsuario);
        $insert->bindParam(":estado", $estado);
        $insert->bindParam(":cidade", $cidade);
        $insert->bindParam(":bairro", $bairro);
        $insert->bindParam(":status", $status);
        $insert->execute();

        header ("location: ../telaLogin.php");      
    }
    
    catch (PDOException $e){
        echo "Erro na página: " . $e->getMessage();
    }

?>