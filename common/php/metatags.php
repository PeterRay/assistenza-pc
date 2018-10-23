<?php

// include ('locations.php');   // carica per file reader

function getMetaDefault(){
        
    $filename="/var/www/public_html/coarbri.it/sos-computer/assistenza/common/php/metatags.sos-computer.default.txt";
    
    $myfile = fopen($filename, "r") or die("ERROR : Impossibile aprire il file " . $filename );
    $txt=fread($myfile,filesize($filename));
    fclose($myfile);

    return $txt;
};

?>
