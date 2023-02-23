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
    
        if(isset($_FILES["imagemPdt"])){
            $nomeDoArquivo = "Caçador_de_Preço_" . md5(date()) . "_" . $_FILES["imagemPdt"]["name"];
            $caminhoTemp = $_FILES["imagemPdt"]["tmp_name"];
            $caminhoFixoSalvar = "C:/xampp/htdocs/cacadordepreco/imagens/produtos/";
            $caminhoFixoDd = "imagens/produtos/";
            move_uploaded_file($caminhoTemp, $caminhoFixoSalvar.$nomeDoArquivo);
            $caminhoImg = $caminhoFixoDd.$nomeDoArquivo;
        }else{
            $caminhoImg = "imagens/produtos/cacador-de-preco-img-padrao.png";
        }

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

        header("Location: ../index.php");
       
    }
    
    catch (PDOException $e){
        echo "Erro na página: " . $e->getMessage();
    }

?>