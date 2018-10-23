<?php 

include('./locations.php');

class addresses { 
    public $city = ''; 
    public $addr = ''; 
    public $num='';
    public $cap='';
    public $province='';
    public $dist='';
}


function getAddress($loc){
    $item = new addresses;
    // DEFAULT
    $item->city="Lurago d'Erba"; $item->addr="via Dante Alighieri";    $item->num="28";    $item->cap="22040";    $item->province="Co";   $item->dist="0";
    $location=$loc;
    
    if(findItem("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/ZONA.Canzo.txt",$location) >= 0){ $location="Canzo"; }
    if(findItem("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/ZONA.Limonta.txt",$location) >= 0){ $location="Limonta"; }
    if(findItem("/var/www/public_html/coarbri.it/sos-computer/assistenza/common/locations/ZONA.Inverigo.txt",$location) >= 0){ $location="lurago di erba"; }    
    
    switch (strtolower($location)) {
        case "inverigo":
            $item->city="Inverigo"; $item->addr="via Della Colombaia";    $item->num="2";    $item->cap="22044";    $item->province="CO";   $item->dist="1";
            break;
        case "lurago di erba":
            $item->city="Lurago d'Erba"; $item->addr="via Dante Alighieri";    $item->num="28";    $item->cap="22040";    $item->province="CO";   $item->dist="0";
            break;
        case "erba":
            $item->city="Erba"; $item->addr="via Alserio";    $item->num="2";    $item->cap="22036";    $item->province="CO";   $item->dist="7";
            break;
        case "giussano":
            $item->city="Giussano"; $item->addr="via Alberto da Giussano";    $item->num="31";    $item->cap="22833";    $item->province="CO";   $item->dist="6";
            break;
        case "seregno":
            $item->city="Seregno"; $item->addr="via San Giovanni Bosco";    $item->num="3";    $item->cap="20831";    $item->province="MB";   $item->dist="12";
            break;
        case "mariano comense":
            $item->city="Mariano Comense"; $item->addr="via Cesare Battisti";    $item->num="36";    $item->cap="22066";    $item->province="CO";   $item->dist="7";
            break;
        case "cantù":
            $item->city="Cantù"; $item->addr="via Brianza";    $item->num="31";    $item->cap="22063";    $item->province="CO";   $item->dist="5";
            break;
        case "milano":
            $item->city="Milano"; $item->addr="via Copernico";    $item->num="38";    $item->cap="20100";    $item->province="MI";   $item->dist="35";
            break;
        case "como":
            $item->city="Como"; $item->addr="via Tommaso Grossi";    $item->num="8";    $item->cap="22100";    $item->province="CO";   $item->dist="15";
            break;
        case "monza":
            $item->city="Monza"; $item->addr="via Andrea Appiani";    $item->num="4";    $item->cap="20900";    $item->province="MB";   $item->dist="25";
            break; 
        case "lecco":
            $item->city="Lecco"; $item->addr="via San Francesco d'Assisi";    $item->num="5";    $item->cap="23900";    $item->province="LC";   $item->dist="22";
            break;    
        case "limonta":
            $item->city="Limonta"; $item->addr="via Della Vittoria";    $item->num="12";    $item->cap="23865";    $item->province="LC";   $item->dist="26";
            break; 
        case "canzo":
            $item->city="Canzo"; $item->addr="via San Francesco";    $item->num="9";    $item->cap="22035";    $item->province="CO";   $item->dist="10";
            break;         
    }
    
    return $item;
}

?>
