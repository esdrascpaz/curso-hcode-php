<?php
    // Declarando uma constante
    // Por convenção, as constantes no PHP são escritas em letras maíusculas
    define("SERVIDOR", "127.0.0.1");
    // Declarando uma array constante
    define("BANCO_DE_DADOS", [
        "127.0.0.1",
        "root",
        "password",
        "test"
    ]);

    echo "Imprimindo uma constante: ", SERVIDOR;

    print_r(BANCO_DE_DADOS);
?>