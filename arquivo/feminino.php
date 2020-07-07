<?php
$feminino = mysqli_query($link,'SELECT * FROM feminino');
if(mysqli_num_rows($feminino)<1){
    echo 'Setor feminino não encontrado.';
}else{
    $row = mysqli_fetch_object($feminino);
    ?>
    <div class="navigation">
        <!-- Barra de navegação -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?pagina=feminino">Página Inicial</a></li>
                <li class="breadcrumb-item" aria-current="page">Feminino</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col">
            <h1><?=$row->nome?></h1>
            <hr>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col">
            <?=$row->descricao?>
        </div>
    </div>
    <?php
}