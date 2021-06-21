<?php

function delivery_time($distance){

    $days = 0;

    if($distance < 100){
        $days = 0;
    } else if($distance < 200){
        $days = 1;
    } else if($distance < 300){
        $days = 1;
    } else if($distance < 300){
        $days = 1;
    } else if($distance < 400){
        $days = 2;
    } else if($distance < 500){
        $days = 3;
    } else {
        $n1 = delivery_time($distance-100);
        $n2 = delivery_time($distance-200);
        $days = $n1+$n2;
    }

    return $days;

}

$distance = rand(0, 2000);
$days = delivery_time($distance);

if($days == 0){
    echo "Menos de ".$distance."km, se entrega el mismo dia"; 
}else{
    echo "Menos de ".$distance."km, se entrega en ".$days." dias"; 
}

?>
