<?php
include_once "../conexao/conexao.php";

try {

    if(isset($_GET['btnCadastrar'])){

    }


 
   $produto = filter_var($_GET['id']);
    
    $insert = $conexao->prepare('DELETE FROM produtos WHERE id = :produto');
    $insert->bindParam(':produto', $produto);
    $insert->execute();

    // Redirecionar para a página principal ou para uma página de confirmação, por exemplo
    header("Location: ../index.php");
    exit();
}

catch (PDOException $e){
    echo "Não foi possivel excluir sua Caça. " . $e->getMessage();
}

?>