<style>
h2 {
    margin: 0;
    font-size: 20px;
    color: blue;
}
</style>

<h2>Joining point</h2>
<p>Utilisation de la fonction ComputeJoinPoint</p>
<?php

function ComputeJoinPoint($nombre1, $nombre2)
{

    //calcul par rapport au premier chiffre
    $chiffre = str_split($nombre1);
    $nombSuiv = array_sum($chiffre) + $nombre1;

    //calcul par rapport au deuxieme chiffre
    $chiffre2 = str_split($nombre2);
    $nombSuiv2 = array_sum($chiffre2) + $nombre2;

    //calcul du point de jonction
    if ($nombSuiv == $nombSuiv2) {
        echo "le point de jonction est " . $nombSuiv . "<br>";
    } else {
        computeJoinPoint($nombSuiv, $nombSuiv2);

    }

}
computeJoinPoint(471, 480);
computeJoinPoint(88, 97);

?>