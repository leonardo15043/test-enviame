<?php

function fibonacci( $limit=1 ){   
    $prev = 0;
    $curr = 1;
    $resultado = 0;
    $count = 0;

    while (true) {
        $ant = $curr;
        $curr += $prev;
        $prev = $ant;
        $result = divider($curr);
        $cont++;

        if($result['count'] > $limit){
           echo '<b>El numero '.$curr.' tiene '.$result['count'].' divisores : </b>'.$result['divisores'];
           break;
        }
        
    }
}

function divider( $num = 0 ){
    $count = 0;
    $divisores;

    for ($i=1; $i < $num + 1; $i++) { 
        if($num%$i == 0){
            $divisores .=$i.",";
            $count++;
        }
    
    }

    return ["count"=>$count,"divisores"=> $divisores];
}


fibonacci(14);

?>