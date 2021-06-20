<?php

$string = 'afoolishconsistencyisthehobgoblinoflittlemindsadoredbylittlestatesmenandphilosophersanddivineswithconsistencyagreatsoulhassimplynothingtodohemayaswellconcernhimselfwithhisshadowonthewallspeakwhatyouthinknowinhardwordsandtomorrowspeakwhattomorrowthinksinhardwordsagainthoughitcontradicteverythingyousaidtodayahsoyoushallbesuretobemisunderstoodisitsobadthentobemisunderstoodpythagoraswasmisunderstoodandsocratesandjesusandlutherandcopernicusandgalileoandnewtonandeverypureandwisespiritthatevertookfleshtobegreatistobemisunderstood';

// PRIMERO FORMA 
//$invested = strrev($string);
//echo $invested;


// SEGUNDA FORMA
//$array = str_split($string);
//$array = array_reverse($array);

//for ($i=0; $i < count($array); $i++) { 
    //echo $array[$i];
//}

// TERCERA FORMA
//$array = str_split($string);
//for($i=count($array);$i>=0;$i--){
    //echo $array[$i];
//}

?>      

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3</title>
</head>
<body>
    <h3>SOLUCION 1 - Invertir texto con la funcion <b>strrev</b> </h3>
    <pre>
        <code>
            $invested = strrev($string);
            echo $invested;
        </code>
    </pre>
    <h3>SOLUCION 2 - Convertir el string en un array con la funcion <b>str_split</b> y invertirlo con la funcion <b>array_reverse</b> </h3>
    <pre>
        <code>
            $array = str_split($string);
            $array = array_reverse($array);
            for ($i=0; $i < count($array); $i++) { 
                echo $array[$i];
            }
        </code>
    </pre>
    <h3>SOLUCION 3 - Convertir el string en un array con la funcion <b>str_split</b> y invertir el bucle for </h3>
    <pre>
        <code>
            $array = str_split($string);
            for($i=count($array);$i>=0;$i--){
                echo $array[$i];
            }
        </code>
    </pre>
    <h3>RESULTADO </h3>
    <?php
        $array = str_split($string);
        for($i=count($array);$i>=0;$i--){
            echo $array[$i];
        }
    ?>
</body>
</html>