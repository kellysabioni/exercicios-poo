<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
<?php
require_once 'src/Livro.php';

$livro1 = new Livro("A Guerra dos Tronos", "George R. R. Martin", 694);
$livro2 = new Livro("A Seleção", "Kiera Cass", 464);

?>

    <p><i>Faça as chamadas e testes nesta página</i></p>

    <ul>
        <li>Titulo: <?= $livro1->getTitulo(); ?></li>
        <li>Autor: <?= $livro1->getAutor(); ?></li>
        <li>Paginas: <?= $livro1->getPaginas(); ?></li>
    </ul>
    <ul>
        <li>Titulo: <?= $livro2->getTitulo(); ?></li>
        <li>Autor: <?= $livro2->getAutor(); ?></li>
        <li>Paginas: <?= $livro2->getPaginas(); ?></li>
    </ul>
    
</body>
</html>