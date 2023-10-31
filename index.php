<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <pre>
        <?php
        require_once 'pessoa.php';
        require_once 'livro.php';
         
        $p[0] = new Pessoa("Paulo", 26, "M");
        $p[1] = new Pessoa("Eduarda", 23, "F");

        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Ana Paulo", 800, $p[1]);
        
        $l[0]->Abrir();
        $l[0]->Folhear(90 );
        $l[0]->Detalhes();

        $l[1]->Detalhes();
        $l[2]->Detalhes();
        ?></pre>
</body>
</html>