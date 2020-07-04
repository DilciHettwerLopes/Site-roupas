<?php
$id = @$_GET['id'];

if(is_numeric($id) && !empty($id) && $_GET['acao']=="apagar"){
    $busca = mysqli_query($link,'SELECT arquivo FROM acessorio WHERE id='.$id);
    $busca = mysqli_fetch_object($busca);
    if(unlink('../img/produtos/'.$busca->arquivo)) {
        mysqli_query($link, "DELETE FROM acessorio WHERE id=$id");
        if (mysqli_affected_rows($link) > 0) {
            $_SESSION['mensagem'] = '<div class="alert alert-success">Produto apagado com sucesso.</div>';
        } else {
            $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao apagar</div>';
        }
    }else{
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao apagar o arquivo no servidor.</div>';
    }
    header('Location:index.php?pagina=acessorio/listagem');
}

if($pagina=='acessorio/acoes' && $_POST) {
    extract($_POST);
    if(empty($nome) || empty($descricao) || empty($tamanho) || empty($preco)){
        $_SESSION['mensagem'] = '<div class="alert alert-danger">Preencha corretamente todos os campos obrigatórios.</div>';
        if (!empty($id)) {
            header('Location:index.php?pagina=acessorio/formulario&id='.$id);
        }else{
            header('Location:index.php?pagina=acessorio/formulario');
        }
    }else {
        $arquivo =  $_FILES['arquivo'];
        $nomeArquivo = md5($arquivo['name'].date('YmdHis')).'.'. pathinfo($arquivo['name'], PATHINFO_EXTENSION);
        if (!empty($id)) {
            $arquivoDB = $arquivo_auxiliar;
            if(!empty($nomeArquivo)) {
                if (move_uploaded_file($arquivo['tmp_name'], '../img/produtos/' . $nomeArquivo)) {
                    unlink('../img/produtos/'.$arquivo_auxiliar);
                    $arquivoDB = $nomeArquivo;
                }
            }
            $update = mysqli_query($link, "UPDATE calcado SET arquivo='$arquivoDB',nome='$nome',descricao='$descricao',tamanho='$tamanho',preco='$preco' WHERE id=$id");
            if (mysqli_affected_rows($link) > 0) {
                $_SESSION['mensagem'] = '<div class="alert alert-success">Produto alterado com sucesso.</div>';
            } else {
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
            }
        } else {
            if(!empty($nomeArquivo)) {
                if (move_uploaded_file($arquivo['tmp_name'], '../img/produtos/' . $nomeArquivo)) {
                    $insert = mysqli_query($link, "INSERT INTO acessorio VALUES (null,'$nome','$descricao','$tamanho', '$preco', '$nomeArquivo')");
                    if (mysqli_affected_rows($link) > 0) {
                        $_SESSION['mensagem'] = '<div class="alert alert-success">Produto cadastrado com sucesso.</div>';
                    } else {
                        $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao gravar</div>';
                    }
                } else {
                    $_SESSION['mensagem'] = '<div class="alert alert-danger">Falha ao enviar o arquivo.</div>';
                }
            }else{
                $_SESSION['mensagem'] = '<div class="alert alert-danger">Selecione um arquivo.</div>';
                header('Location:index.php?pagina=acessorio/formulario');
                exit();
            }
        }
        header('Location:index.php?pagina=acessorio/listagem');
    }
}