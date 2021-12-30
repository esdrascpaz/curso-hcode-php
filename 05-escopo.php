<?php
// Escopo: Alcance e visibilidade de uma variável

$nome = "Glaucio";

function teste(){
    // Utilizando a variável fora do escopo
    global $nome;
    echo $nome;
}

function teste2() {
    // Nova variável criada dentro desse escopo, com o mesmo nome que não interfere na de fora
    $nome = " Jõao";

    echo $nome;
}

teste();
teste2();

?>