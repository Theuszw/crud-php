<?php
    require_once "../src/funcoes-produtos.php";
    $listaDePodutos = lerProdutos($conexao);

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
    </head>
    <body>

    <div class="container">
        <h1>Produtos | SELECT <a href="../index.html"></a></h1>
        <hr>
        <h2>Lendo e carregando todos os produtos</h2>

        <p><a href="inserir.php" style="color: blue;">Inserir um novo produto</a></p>
        <hr>
        <div class="produtos">

        <?php foreach($listaDeProdutos as $produto) { ?>
            
            <article>

            <?=$produto['nome']?>

            <h3><?=$produto['produto']?> </h3>

            <?=number_format($produto['preco'], 2, ',', '.')?>

            <p><b>Preço: </b> <?=formataMoeda($produto['preco'])?></p>

            <p><b>Quantidade: </b><?=$produto['quantidade']?></p>
            <p><b>Descrição:</b> <?=$produto['descricao']?></p>

            <?=$produto['fabricante_id']?>

            <p><b>Fabricante:</b> <?=$produto['fabricante']?></p>

            <p>
                <a href="atualizar.php?id=<?=$produto['id']?>" style="color: blue;">Atualizar</a>
                <a class="excluir" href="excluir.php?id=<?=$produto['id']?>" style="color: red;">Excluir</a>
            </p>

            <hr>
            </article>
        <?php } ?>
        </div>

    </div>

    <script src="../js/confirm.js"></script>
        
    </body>
    </html>