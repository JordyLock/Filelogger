<?php

require 'FileLogger.php';
require 'Error.php';

$g = new FileLogger("C:/wamp64/www/twee/Filelogger/Logs/log.txt", "all");
$g->Error = new Error("Kapot", "13:51");


if($g->Severity === "all"){
        printVar($g);
    }
 elseif($g->Severity === "only-errors" ){
        printVar($g->Error);
    }


//printVar($g);

function printVar($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
