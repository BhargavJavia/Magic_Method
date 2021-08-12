<?php
    $a = 10;
    $b =& $a;
    $b = 55;
    echo $a;
?>