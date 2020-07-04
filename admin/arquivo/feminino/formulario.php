<?php
$id = $_GET['id'];

if(is_numeric($id) && !empty($id)){
    $titulo = "Formulário de alteração de produtos";
    $botao = 'Atualizar';
    $feminino = mysqli_query($link,"SELECT * FROM feminino WHERE id=$id");
    if(mysqli_num_rows($feminino)<1){
        echo 'Produto não encontrado';
        exit();
    }
    $buscaFeminino = mysqli_fetch_object($feminino);
}else{
    $titulo = "Formulário de cadastro de produtos";
    $botao = 'Cadastrar';
    $id = '';
}

?>
<form enctype="multipart/form-data" method="POST" action="index.php?pagina=feminino/acoes&id=<?=$id?>" class="form-horizontal">
    <h2 class="display-5" id="titleform"><?=$nome?></h2>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaFeminino->titulo?>" class="form-control" name="nome" placeholder="Digite o nome">
    </div>
    <div class="input-group mb-3">
        <input type="text" value="<?=$buscaFeminino->descricao?>" class="form-control" name="descricao" placeholder="Digite a descricao">
    </div>
    <div class="input-group">
        <textarea class="form-control" name="tamanho" placeholder="Digite o tamanho"><?=trim($buscaFeminino->tamanho)?></textarea>
    </div>
    <div class="input-group">
        <textarea class="form-control" name="preco" placeholder="Digite o preco"><?=trim($buscaFeminino->preco)?></textarea>
    </div>
    <div class="input-group mt-3">
        <?php
            if(!empty($buscaFeminino->arquivo) && !empty($id)){
                echo '<img src="../img/produtos/'.$buscaFeminino->arquivo.'" width="150">';
                echo '<input type="hidden" name="arquivo_auxiliar" value="'.$buscaFeminino->arquivo.'">';
            }
        ?>
        <input type="file" name="arquivo">
    </div>
    <div class="mt-4 pb-4">
        <button type="submit" class="btn btn-success"><?=$botao?>Feminino</button>
        <button type="reset" class="btn btn-danger">Limpar formulário</button>
    </div>
</form>