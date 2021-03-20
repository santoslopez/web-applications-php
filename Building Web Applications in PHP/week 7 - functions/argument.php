<?php
    function howdy($lang){
        if ($lang=='es') {
            // code...
            return "Hola";
        }

        if ($lang=='fr') {
            // code...
            return "Bonjour";
        }
        print "Hello\n";
    }


    print howdy('es') . "Glenn";
    print howdy('fr') . "Sally";

?>