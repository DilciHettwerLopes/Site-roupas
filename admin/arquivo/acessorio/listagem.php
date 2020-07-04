<div class="table-responsive">
        <h2 class="display-5" id="title-table">Acessorios</h2>
        <a href="index.php?pagina=acessorio/formulario" class="btn btn-info mb-4">Cadastrar novo produto</a>
        <?php
        $sqlcalcados = mysqli_query($link, "SELECT *,(SELECT COUNT(id) FROM acessorio WHERE publicacao.curso=curso.id) as total FROM curso ORDER BY titulo ASC");
        if (mysqli_num_rows($sqlFemininos) > 0) {
        ?>
        <table class="table table-striped" data-toggle="data-tables" style="width:100%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Tamanho</th>
                <th scope="col">Preço</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $x = 0;
            while ($rowAcessorio = mysqli_fetch_object($sqlAcessorio)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td>
                        <img src="../img/produtos/<?= $rowAcessorio->arquivo; ?>" width="80">
                    </td>
                    <td><?= $rowAcessorio->nome; ?></td>
                    <td><?= $rowAcessorio->descricao; ?></td>
                    <td><?= $rowAcessorio->tamanho; ?></td>
                    <td><?= $rowAcessorio->preco; ?></td>
                    <td>
                        <?php
                            if($rowAcessorio->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=acessorio/acoes&acao=apagar&id=<?= $rowAcessorio->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=acessorio/formulario&id=<?= $rowAcessorio->id; ?>">Alterar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php }else{
            ?>
            <div class="alert alert-warning mt-3 mb-3">Nenhum registro encontrado.</div>
            <?php
        }?>
    </div>
