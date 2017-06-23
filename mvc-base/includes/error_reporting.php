<?php

$showErros = false; //switch this to true for error reporting

if($showErros) {
error_reporting(E_ALL);
ini_set("display_errors", 1);

} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}
