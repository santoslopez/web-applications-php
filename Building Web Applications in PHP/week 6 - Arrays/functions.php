<?php
    $za = array();
    $za["name"] = "Chuck";
    $za["course"] = "WA4E";

    if (array_key_exists('course',$za)) {
        // code...
        echo("course exists ");
    }else{
        echo("course does not exist");

    }

    echo isset($za['name'])? "name is set": "name is not set";





?>