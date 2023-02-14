<?php
include "../conexao/conexao.php";
session_start();
try{

$login = filter_var($_POST['login']);
$senha = filter_var($_POST['senha']);


$senhacrypto = md5($senha);


$consulta = $conexao->query("select * from 
clientes where login = '$login'");

$usuario = $consulta->fetch(PDO::FETCH_ASSOC);

if ($consulta->rowCount() == 0 || $senhacrypto != $usuario['senha']){
    echo"
        <script language='javascript' type='text/javascript'>
        
        alert('Login não encontrado ou Senha Incorreta!');
        window.location.href='../telaLogin.php';
        
        </script>";
        die();
} else{
    setcookie("login",$login);
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("Location: ../index.php");
}

}catch(PDOExecption $e){
    echo "Error ". $e -> getMessage();
}
?>