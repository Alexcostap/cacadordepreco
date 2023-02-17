<?php 

include "../conexao/conexao.php";

try{
        $usuario = "2";
        $categoriaPdt = filter_var($_POST['categoriaPdt']);
        $nomePdt = filter_var($_POST['nomePdt']);
        $precoPdt = filter_var($_POST['precoPdt']);
        $descricaoPdt = filter_var($_POST['descPdt']);
        $estadoPdt = filter_var($_POST['estadoPdt']);
        $cidadePdt = filter_var($_POST['cidadePdt']);
        $bairroPdt = filter_var($_POST['bairroPdt']);
        $mercadoPdt = filter_var($_POST['mercadoPdt']);
        $caminhoImg = "imagens/produtos/produto1.png";


        $insert = $conexao->prepare("insert into produtos (id_cliente, categoria_produto, nome_produto, preco_produto, descricao_produto, 
        estado_produto, cidade_produto, bairro_produto, mercado_produto, caminho_img) 
        values (:usuario, :categoriaPdt, :nomePdt, :precoPdt, :descricaoPdt, :estadoPdt, :cidadePdt, :bairroPdt, :mercadoPdt, :caminhoImg )");
        $insert->bindParam(":usuario", $usuario);
        $insert->bindParam("categoriaPdt", $categoriaPdt);
        $insert->bindParam(":nomePdt", $nomePdt);
        $insert->bindParam(":precoPdt", $precoPdt);
        $insert->bindParam(":descricaoPdt", $descricaoPdt);
        $insert->bindParam(":estadoPdt", $estadoPdt);
        $insert->bindParam(":cidadePdt", $cidadePdt);
        $insert->bindParam(":bairroPdt", $bairroPdt);
        $insert->bindParam(":mercadoPdt", $mercadoPdt);
        $insert->bindParam(":caminhoImg", $caminhoImg);
        $insert->execute();

        header ("location: ../index.php");      
    }
    
    catch (PDOException $e){
        echo "Erro na página: " . $e->getMessage();
    }

?>