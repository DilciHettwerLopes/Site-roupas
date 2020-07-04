<div class="table-responsive">
        <h2 class="display-5" id="title-table">Calçados</h2>
        <a href="index.php?pagina=calcado/formulario" class="btn btn-info mb-4">Cadastrar novo produto</a>
        <?php
        $sqlcalcados = mysqli_query($link, "SELECT *,(SELECT COUNT(id) FROM calcado WHERE publicacao.curso=curso.id) as total FROM curso ORDER BY titulo ASC");
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
            while ($rowCalcados = mysqli_fetch_object($sqlCalcados)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td>
                        <img src="../img/produtos/<?= $rowCalcados->arquivo; ?>" width="80">
                    </td>
                    <td><?= $rowCalcados->nome; ?></td>
                    <td><?= $rowCalcados->descricao; ?></td>
                    <td><?= $rowCalcados->tamanho; ?></td>
                    <td><?= $rowCalcados->preco; ?></td>
                    <td>
                        <?php
                            if($rowCalcados->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=calcado/acoes&acao=apagar&id=<?= $rowCalcados->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=calcado/formulario&id=<?= $rowCalcados->id; ?>">Alterar</a>
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
