<div class="table-responsive">
        <h2 class="display-5" id="title-table">Feminino</h2>
        <a href="index.php?pagina=feminino/formulario" class="btn btn-info mb-4">Cadastrar novo produto</a>
        <?php
        $sqlfemininos = mysqli_query($link, "SELECT *,(SELECT COUNT(id) FROM publicacao WHERE publicacao.curso=curso.id) as total FROM curso ORDER BY titulo ASC");
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
            while ($rowFemininos = mysqli_fetch_object($sqlFemininos)) {
                $x++;
                ?>
                <tr>
                    <th scope="row"><?= $x ?></th>
                    <td>
                        <img src="../img/produtos/<?= $rowFemininos->arquivo; ?>" width="80">
                    </td>
                    <td><?= $rowCursos->nome; ?></td>
                    <td><?= $rowCursos->descricao; ?></td>
                    <td><?= $rowCursos->tamanho; ?></td>
                    <td><?= $rowCursos->preco; ?></td>
                    <td>
                        <?php
                            if($rowFemininos->total<1){
                        ?>
                        <a class="btn btn-danger" href="index.php?pagina=feminino/acoes&acao=apagar&id=<?= $rowFemininos->id; ?>">Apagar</a>
                        <?php }?>
                        <a class="btn btn-info" href="index.php?pagina=feminino/formulario&id=<?= $rowFemininos ->id; ?>">Alterar</a>
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
