<?php

// legge un file e torna il contenuto come stringa
function readAsString( $filename ){
    $myfile = fopen($filename, "r") or die("ERROR : Impossibile aprire il file " . $filename );
    $list=fread($myfile,filesize($filename));
    fclose($myfile);

    return $list;
}

// legge un file e torna il contenuto come array
function readAsArray( $filename ){
    $res=readAsString( $filename );
    return explode(',', $res);
}


function findItem($filename,$search){

    $array=readAsArray($filename);
    $no=0; $res=-1;
    foreach ($array as $item) {
        $tloc=strtolower(trim($item,"\n")); $no++;
        
        if($tloc==strtolower($search)){
            $res=$no;
            return $res;
        };
    };
    
    return $res;  // non trovato
}


// genera lista con link a locations per un file
function getLinkLocationList($filename, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);
/*
    $no = 1;
    foreach ($array as $location) {
        echo $no . ". " . $location . PHP_EOL;
        $no++;
    };
*/    
    $res="<p>";
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $href= strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tloc;    $hrefVisibleTag = $tloc;
        $no++;
            
        // esempio item : "<a href='www'>WWW</a> "
        //$item='<a href="' . $href . '">' . $hrefVisibleTag . '</a> ';
        $item='' . $hrefVisibleTag . ' ';
        // $res=$res . $item;
    };
    $item=$item . ' </p>';
    return trim($res);
}

// genera lista con link a locations per un file
function getLinkLocationListEx($filename, $filepath, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);
/*
    $no = 1;
    foreach ($array as $location) {
        echo $no . ". " . $location . PHP_EOL;
        $no++;
    };
*/    
    $res="<p>";
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $href= $filepath . strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tloc;    $hrefVisibleTag = $tloc;
        $no++;
            
        // esempio item : "<a href='www'>WWW</a> "
        $item='<a href="' . $href . '">' . $hrefVisibleTag . '</a> ';
        //$item='' . $hrefVisibleTag . ' ';
        $res=$res . $item;
    };
    $item=$item . ' </p>';
    return trim($res);
}


// genera lista con link a locations per un file
function getLinkLocationList_to_be_tested_yet($filename, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);
    
    $no=0;
    $res='<ul itemscope itemtype="http://schema.org/ItemList">';
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $tlocVis=$tloc;
        $tloc = str_replace(' ', '%20', $tloc);
        $href= strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tlocVis;
        $no++;
        
        $item='<a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" itemprop="url" href="' . $href . '">' . $hrefVisibleTag . '<meta itemprop="position" content="' . $no. '"/></a>';
        $res=$res . $item;
    };
    $res=trim($res);
    $res=$res . "</ul>";
    return $res;
}

// genera lista con link a locations per un file
function getLinkLocationLi_SAVE0($filename, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);
/*
    $no = 1;
    foreach ($array as $location) {
        echo $no . ". " . $location . PHP_EOL;
        $no++;
    };
*/    
    $res="";
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $href= strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tloc;
        $no++;
        
        $item='<li><a href="' . $href . '">' . $hrefVisibleTag . '</a></li> ';
        $res=$res . $item;
    };
    
    return trim($res);
}

function getLinkLocationLi($filename, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);

    $no=0;
    $res='<ul itemscope itemtype="http://schema.org/ItemList">';
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $tlocVis=$tloc;
        $tloc = str_replace(' ', '%20', $tloc);
        $href= strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tlocVis;
        $no++;
        
        $item='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="' . $href . '"><p itemprop="name">' . $hrefVisibleTag . '</p></a><meta itemprop="position" content="' . $no. '" /> </li> ';
        // $res=$res . $item;
    };
    $res=$res . "</ul>";
    return trim($res);
}

function getLinkLocationLiEx($filename, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);

    $no=0;
    $res='<ol itemscope itemtype="http://schema.org/ItemList">';
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $tlocVis=$tloc;
        $tloc = str_replace(' ', '%20', $tloc);
        $href= strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tlocVis;
        $no++;
        
        $item='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="' . $href . '"><p itemprop="name">' . $hrefVisibleTag . '</p></a><meta itemprop="position" content="' . $no. '" /> </li> ';
        $res=$res . $item;
    };
    $res=$res . "</ol>";
    return trim($res);
}

function getLinkLocationLiEx2($filename, $filepath, $hrefPrefix, $visibleLinkText){
    $array=readAsArray($filename);

    $no=0;
    $res='<ol itemscope itemtype="http://schema.org/ItemList">';
    foreach ($array as $location) {
        $tloc=trim($location,"\n");
        $tlocVis=$tloc;
        $tloc = str_replace(' ', '%20', $tloc);
        $href= $filepath . strtolower($hrefPrefix . $tloc . ".html");
        $hrefVisibleTag = $visibleLinkText . $tlocVis;
        $no++;
        
        $item='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="' . $href . '"><p itemprop="name">' . $hrefVisibleTag . '</p></a><meta itemprop="position" content="' . $no. '" /> </li> ';
        $res=$res . $item;
    };
    $res=$res . "</ol>";
    return trim($res);
}



// ESEMPI USO
// echo getLinkLocationList("primaCerchiaList.txt","assistenza-computer-","assistenza computer "). PHP_EOL;
// echo getLinkLocationList("secondaCerchiaList.txt","assistenza-computer-","Assistenza computer "). PHP_EOL;

// echo getLinkLocationLi("capoluoghiList.txt","assistenza-computer-","assistenza computer "). PHP_EOL;

?>
