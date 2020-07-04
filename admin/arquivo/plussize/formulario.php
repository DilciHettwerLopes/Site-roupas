<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de produtos";
    $botao = 'Atualizar';
    $feminino = mysqli_query($link,"SELECT * FROM plussize WHERE id=$id");
    if(mysqli_num_rows($plussize)<1){
        echo 'Produto não encontrado';
        exit();
    }
    $buscaPlussize = mysqli_fetch_object($plussize);
}else{
    $titulo = "Formulário de cadastro de produtos";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<form enctype="multipart/form-data" method="POST" action="index.php?pagina=plussize/acoes&id=<?=$id?>" class="form-horizontal">
    <h2 class="display-5" id="titleform"><?=$nome?></h2>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPlussize->nome?>" class="form-control" name="nome" placeholder="Digite o nome">
    </div>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaPlussize->descricao?>" class="form-control" name="descricao" placeholder="Digite a descricao">
    </div>
    <div class="input-group">
        <textarea class="form-control" name="tamanho" placeholder="Digite o tamanho"><?=trim($buscaPlussize->tamanho)?></textarea>
    </div>
    <div class="input-group">
        <textarea class="form-control" name="preco" placeholder="Digite o preco"><?=trim($buscaPlussize->preco)?></textarea>
    </div>
    <div class="input-group mt-3">
        <?php
            if(!empty($buscaPlussize->arquivo) && !empty($id)){
                echo '<img src="../img/produtos/'.$buscaPlussize->arquivo.'" width="150">';
                echo '<input type="hidden" name="arquivo_auxiliar" value="'.$buscaPlussize->arquivo.'">';
            }
        ?>
        <input type="file" name="arquivo">
    </div>
    <div class="mt-4 pb-4">
        <button type="submit" class="btn btn-success"><?=$botao?>Plus Size</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </div>
</form>