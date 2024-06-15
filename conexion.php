<?php

function palabra ($pal){
    $continue=0;
    for ($i=0;$i<10;$i++){
        if ($pal[$i]==null){
            break 1;
        }else {
            $continue++;
        }
        echo $i;
    }
    echo "<br>";
    echo $continue;
}
palabra("holas");
?>