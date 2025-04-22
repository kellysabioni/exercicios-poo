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
    require_once 'src/Models/Programacao.php';

    $livro1 = new Literario("A Guerra dos Tronos", "George R. R. Martin", Genero::AVENTURA);
    
    $livro3 = new Tecnico("A Seleção", "Kiera Cass", Formato::DIGITAL);
    
    $livro5 = new Programacao("TESTE TODOS", "TUDO JUNTO", Formato::DIGITAL, "INGLES");
    ?>

    <p><i>Faça as chamadas e testes nesta página</i></p>

    <ul>
        <li>Titulo Literário: <?= $livro1->getTitulo(); ?></li>
        <li>Autor Literário: <?= $livro1->getAutor(); ?></li>
        <li>Genero Literário: <?= $livro1->getGenero()->name; ?></li>

    </ul>
     
    <ul>
        <li>Titulo Tecnico: <?= $livro3->getTitulo(); ?></li>
        <li>Autor Tecnico: <?= $livro3->getAutor(); ?></li>
        <li>Genero Tecnico: <?= $livro3->getFormato()->name; ?></li>
        
    </ul>
    
    <ul>
        <li>Titulo todos: <?= $livro5->getTitulo(); ?></li>
        <li>Autor todos: <?= $livro5->getAutor(); ?></li>
        <li>Genero todos: <?= $livro5->getFormato()->name; ?></li>
        <li>Linguagem todos: <?= $livro5->getLinguagem() ; ?></li>

    </ul>

</body>

</html>