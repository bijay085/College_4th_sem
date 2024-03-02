<?php

$brs = "a";
while ($brs <= 'z') {
    echo '<br>' ;
    echo $brs;
    $brs++;

    if ($brs == 'aa') {
        break;
    }
}


?>