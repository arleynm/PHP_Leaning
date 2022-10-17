<?

    $host ="localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);


    $table = "itens";
    $nome = "xicara";
    $descricao = "É uma xicara usada de cor rosa";

    $q = "INSERT INTO $table(nome, descricao) VALUES ($nome, )"


?>  