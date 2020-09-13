<?php

function fatorial ($n) {
    return  $n > 1 ? $n * fatorial($n - 1) : 1;
};
echo fatorial(4);

?>