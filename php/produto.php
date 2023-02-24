<?php 

include "../conexao/conexao.php";

try{
        $usuario =filter_var($_POST['idUsuario']);;
        $categoriaPdt = filter_var($_POST['categoriaPdt']);
        $nomePdt = filter_var($_POST['nomePdt']);
        $precoPdt = filter_var($_POST['precoPdt']);
        $descricaoPdt = filter_var($_POST['descPdt']);
        $estadoPdt = filter_var($_POST['estadoPdt']);
        $cidadePdt = filter_var($_POST['cidadePdt']);
        $bairroPdt = filter_var($_POST['bairroPdt']);
        $mercadoPdt = filter_var($_POST['mercadoPdt']);
        // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
        date_default_timezone_set('America/Sao_Paulo');
        // CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
        $dataPdt = date('d/m/Y H:i:s', time());
        
    
        if(isset($_FILES["imagemPdt"])){
            $nomeDoArquivo = "Caçador_de_Preço_" . md5($nomePdt) . "_" . $_FILES["imagemPdt"]["name"];
            $caminhoTemp = $_FILES["imagemPdt"]["tmp_name"];
            $caminhoFixoSalvar = "C:/xampp/htdocs/cacadordepreco/imagens/produtos/";
            $caminhoFixoDd = "imagens/produtos/";
            move_uploaded_file($caminhoTemp, $caminhoFixoSalvar.$nomeDoArquivo);
            $caminhoImg = $caminhoFixoDd.$nomeDoArquivo;
        }else{
            $caminhoImg = "imagens/produtos/cacador-de-preco-img-padrao.png";
        }

        $insert = $conexao->prepare("insert into produtos (id_cliente, categoria_produto, nome_produto, preco_produto, descricao_produto, 
        estado_produto, cidade_produto, bairro_produto, mercado_produto, caminho_img, data_de_cadastro) 
        values (:usuario, :categoriaPdt, :nomePdt, :precoPdt, :descricaoPdt, :estadoPdt, :cidadePdt, :bairroPdt, :mercadoPdt, :caminhoImg, :dataPdt )");
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
        $insert->bindParam(":dataPdt", $dataPdt);
        $insert->execute();

        header("Location: ../index.php");
       
    }
    
    catch (PDOException $e){
        echo "Erro na página: " . $e->getMessage();
    }

?>