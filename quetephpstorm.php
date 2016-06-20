<?php
    $total = "";
    $students = [
        "Emmanuel"  => 42,
        "Thierry"   => 51,
        "Pascal"    => 45,
        "Eric"      => 48,
        "Nicolas"   => 19
    ];
foreach($students as $cle => $valeur)
{
    $total += $valeur;
    echo $cle ,' : ', $valeur ,'<br/>';
};

$moyenne = $total / 5;
echo "moyenne : ".$moyenne;

?>