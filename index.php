<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>

<body>
    <h1>Exercício 03</h1>
    <hr>
    <?php
    require_once 'src/Enums/Genero.php';
    require_once 'src/Enums/Formato.php';
    require_once 'src/Models/Livro.php';
    require_once 'src/Models/Literario.php';
    require_once 'src/Models/Tecnico.php';

    $livro1 = new Literario("A Guerra dos Tronos", "George R. R. Martin", Genero::AVENTURA);
    $livro2 = new Literario("A Seleção", "Kiera Cass", Genero::AVENTURA);

    ?>

    <p><i>Faça as chamadas e testes nesta página</i></p>

    <ul>
        <li>Titulo: <?= $livro1->getTitulo(); ?></li>
        <li>Autor: <?= $livro1->getAutor(); ?></li>
        <li>Genero: <?= $livro1->getGenero()->name; ?></li>

    </ul>
    <ul>
        <li>Titulo: <?= $livro2->getTitulo(); ?></li>
        <li>Autor: <?= $livro2->getAutor(); ?></li>
        <li>Genero: <?= $livro2->getGenero()->name; ?></li>

    </ul>

</body>

</html>