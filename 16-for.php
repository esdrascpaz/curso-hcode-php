<?php

for ($i = 0; $i < 1000; $i += 5){

    // Entre o 200 e o 800, pule a instrução e vá para o início do for
    if ($i > 200 && $i < 800) continue;

    // Quando chegar no 900, pare
    if ($i === 900) break;

    echo $i . "<br>";
}

?>