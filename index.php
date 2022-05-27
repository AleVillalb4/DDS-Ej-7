<?php
//Mostrar la tabla de multiplicar del 3, utilizando un while (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//3 * 1 = 3
//3 * 2 = 6
//3 * 3 = 9


$numero = 1;
$resu = 0;
while ($resu <= 57) {
    $resu = 3 * $numero;
    echo '3 * ' . $numero . ' = ' . $resu;
    echo '<hr>';
    $numero++;
}
