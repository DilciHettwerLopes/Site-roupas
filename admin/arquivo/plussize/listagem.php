<div class="table-responsive">
        <h2 class="display-5" id="title-table">Plus Size</h2>
        <a href="index.php?pagina=plussize/formulario" class="btn btn-info mb-4">Cadastrar novo produto</a>
        <?php
        $sqlplussize = mysqli_query($link, "SELECT *,(SELECT COUNT(id) FROM plussize WHERE plussize.curso=curso.id) as total FROM curso ORDER BY titulo ASC");
        if (mysqli_num_rows($sqlPlussize) > 0) {
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
            while ($rowPlussizes = mysqli_fetch_object($sqlPlussizes)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td>
                        <img src="../img/produtos/<?= $rowPlussizes->arquivo; ?>" width="80">
                    </td>
                    <td><?= $rowPlussizes->nome; ?></td>
                    <td><?= $rowPlussizes->descricao; ?></td>
                    <td><?= $rowPlussizes->tamanho; ?></td>
                    <td><?= $rowPlussizes->preco; ?></td>
                    <td>
                        <?php
                            if($rowPlussizes->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=plussize/acoes&acao=apagar&id=<?= $rowPlussizes->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=plussize/formulario&id=<?= $rowPlussizes ->id; ?>">Alterar</a>
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
