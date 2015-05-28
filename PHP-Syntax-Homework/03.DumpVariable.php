<?php
$var = 1.234;
if(is_numeric($var)) {
    var_dump($var);
} else {
    echo gettype($var);
}
?>