<?php

function aula($num){
    if($num!=0){
    echo "Função aula $num <br/>";
    aula ($num-1);
}
}

aula(10);


function fat($num){
    if($num<0){
        return -1;
    }
    if($num<=1){
        return 1;
    }
        return $num*fat($num-1);
    }

echo "Fatorial de 4:   ".fat(4);







?>
