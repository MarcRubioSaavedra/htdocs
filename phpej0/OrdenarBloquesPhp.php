<?php
//$edad = 'z';

//switch ($edad) {
//case 'a':
//echo 'menor';
//break;
//case 'b':
//echo 'medio';
//break;
//case 'c':
//echo 'mayor';
//break;
//default:
//echo 'nope';
//break;
//}

//if(){}else{}

function cosa($edad)
{
    $guardado = '';
    if ($edad > 17) {
        $guardado = 'mayor de edad';
    } elseif ($edad > 0) {
        $guardado = 'menor de edad';
    } else {
        $guardado = 'numero invalido';
    }
    return $guardado;
}

//assert(1 == 2);

assert(cosa(17) == 'menor de edad');
assert(cosa(18) == 'mayor de edad');
assert(cosa(-18) == 'numero invalido');
assert(cosa(-16) == 'numero invalido');
