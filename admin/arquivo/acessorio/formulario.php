<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de produtos";
    $botao = 'Atualizar';
    $acessorio = mysqli_query($link,"SELECT * FROM acessorio WHERE id=$id");
    if(mysqli_num_rows($acessorio)<1){
        echo 'Produto não encontrado';
        exit();
    }
    $buscaAcessorio = mysqli_fetch_object($acessorio);
}else{
    $titulo = "Formulário de cadastro de produtos";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<form enctype="multipart/form-data" method="POST" action="index.php?pagina=acessorio/acoes&id=<?=$id?>" class="form-horizontal">
    <h2 class="display-5" id="titleform"><?=$nome?></h2>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaAcessorio->nome?>" class="form-control" name="nome" placeholder="Digite o nome">
    </div>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaAcessorio->descricao?>" class="form-control" name="descricao" placeholder="Digite a descricao">
    </div>
    <div class="input-group">
        <textarea class="form-control" name="tamanho" placeholder="Digite o tamanho"><?=trim($buscaAcessorio->tamanho)?></textarea>
    </div>
    <div class="input-group">
        <textarea class="form-control" name="preco" placeholder="Digite o preco"><?=trim($buscaAcessorio->preco)?></textarea>
    </div>
    <div class="input-group mt-3">
        <?php
            if(!empty($buscaCalcado->arquivo) && !empty($id)){
                echo '<img src="../img/produtos/'.$buscaAcessorio->arquivo.'" width="150">';
                echo '<input type="hidden" name="arquivo_auxiliar" value="'.$buscaAcessorio->arquivo.'">';
            }
        ?>
        <input type="file" name="arquivo">
    </div>
    <div class="mt-4 pb-4">
        <button type="submit" class="btn btn-success"><?=$botao?>Acessorio</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </div>
</form>