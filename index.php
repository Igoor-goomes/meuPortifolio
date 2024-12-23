<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
</head>
<body>
    <?php
        $nome = "Igor";
        $saudacao = "Olá";
        $titulo = $saudacao . "," . " Portifolio do ". $nome;
        $subtitulo = "Seja bem vindo ao meu portifolio!";
        $ano = 2024;

        $projeto = "Meu Portifolio";
        $status = true; // true,1 ou false,0
        $dataProjeto = "2024-12-22";
        $descricao = "Meu portifolio, escrito em PHP";
    ?>
    <h1>
        <?php echo $titulo; ?>
    </h1>
    <p>
        <?php echo $subtitulo; ?>
    </p>
    <p>
        <!-- Outra forma de passar código em PHP dentro do HTML! -->
        <?=$ano; ?>
    </p>
    <hr>
    <div>
        <h2><?=$projeto;?></h2>
        <p><?=$descricao;?></p>
        <div>
            <div><?=$dataProjeto;?></div>
            <div>Projeto:
            <?php
                  if ($status) {
                    echo "finalizado!";
                  } else {
                    echo "não finalizado";
                  }
                ?> 
            </div>
        </div>
    </div>
</body>
</html>