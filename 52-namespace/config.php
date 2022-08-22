<?php

spl_autoload_register(function ($nameClass) {
    // pasta com os arquivos com suas respectivas classes
    $dirClass = "class";
    // nome do arquivo, incluindo o caminho e suas pastas e extensão (path)
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if (file_exists($filename)) {
        require_once($filename);
    }
});
