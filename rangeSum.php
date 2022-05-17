<style>
h2 {
    margin: 0;
    font-size: 20px;
    color: blue;
}
</style>

<h2>Range sum</h2>
<p>Utilisation de la fonction calc</p>
<?php
function Calc($n1, $n2)
{

    $sum = 0;
    for ($i = $n1; $i <= $n2; $i++) {
        $sum += $i;

    }
    return "le résultat de la somme de tout les entiers entre " . $n1 . " et " . $n2 . " est égale à " . $sum . "<br>";
}

echo Calc(1, 5);
echo Calc(12, 25);
echo Calc(41, 85);

?>