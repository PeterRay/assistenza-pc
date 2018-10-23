<?php

function contactInfoAmp(){
echo '<h2>Chiamaci direttamente</h2>'.PHP_EOL;
echo '<h3 style="color:blue; font-size:1.75em;"> <u>al ☎ (+39)347-4618653</u></h3>'.PHP_EOL;
echo '<h3 style="color:blue; font-size:1.35em;"> e-mail &#x2709 info@coarbri.it</h3>'.PHP_EOL;
}
function contactInfo(){
echo '<h2>Chiamaci direttamente</h2>'.PHP_EOL;
echo '<h1 style="font-size:1.75em;"> al <u style="color:green;"> ☎ (+39)347-4618653</u></h1>'.PHP_EOL;
echo '<h1 style="font-size:1.35em;"> e-mail &#x2709 info@coarbri.it</h1>    <br><br>'.PHP_EOL;
}



function sospcArticleBegin(
            $headline,                          
            $datetime
){

echo '<div class="container content" id="main-content">    <!-- class container content begin -->'.PHP_EOL;

echo '<article>'.PHP_EOL;
echo '<h1 itemprop="headline">' . $headline . '</h1>'.PHP_EOL;

echo '<img src="https://www.coarbri.it/sos-computer/assistenza/data/sos-computer.jpg" alt="assistenza informatica" title="assistenza informatica" style="width:9%" class="floatRight"></img>'.PHP_EOL; 

echo '<div class="updated">Ultimo aggiornamento: <span itemprop="dateModified" content="' . $datetime . '">' . $datetime . '</span> a cura di <span itemprop="author publisher creator" itemscope itemtype="https://schema.org/Organization"><span itemprop="name">SOS Computer</span></span></div>'.PHP_EOL;

echo "<link rel='logo' href='https://www.coarbri.it/sos-computer/assistenza/data/sos-computer-logo.jpg'>".PHP_EOL;

}

function sospcArticleBeginWebLayout(
            $headline,                          
            $datetime
){

echo '<div class="container content" id="main-content">    <!-- class container content begin -->'.PHP_EOL;
echo '<article>'.PHP_EOL;

//echo '<h1 itemprop="headline">' . $headline . '</h1>'.PHP_EOL;

//echo '<div class="updated">Ultimo aggiornamento: <span itemprop="dateModified" content="' . $datetime . '">' . $datetime . '</span> a cura di <span itemprop="author publisher creator" itemscope itemtype="https://schema.org/Organization"><span itemprop="name">SOS Computer</span></span></div>'.PHP_EOL;

}


function sospcArticleEnd(){

echo '</article>'.PHP_EOL;

// -----------------------------------------------------------------
echo '<div id="meta_wrap" class="cf">'.PHP_EOL;
echo '<ul class="options cf">'.PHP_EOL;
echo '<li class="useful-page"> <span class="nolink">Le informazioni sono risultate utili?</span> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?yes" rel="nofollow" class="first-child">Si</a> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?no" rel="nofollow">No</a></li>'.PHP_EOL;
echo '<li>'.PHP_EOL;
echo '<ul>'.PHP_EOL;
// echo '<li class="feedback"><a href="/feedback/" rel="nofollow" title="Lasciaci un commento">il tuo commento</a></li>'.PHP_EOL;
echo '<li class="email"><a href="mailto:info@coarbri.it" rel="nofollow" title="e-mail">inviaci una e-mail</a></li>'.PHP_EOL;
echo '<li class="first-child print"><a href="#" onclick="window.print();return false;" rel="nofollow" title="Stampa una copia della pagina">Stampa</a></li>'.PHP_EOL;

echo '</ul>'.PHP_EOL;
echo '</li>'.PHP_EOL;
echo '</ul>'.PHP_EOL;
echo '</div>'.PHP_EOL;
// -----------------------------------------------------------------

echo '</div>   <!-- class container content end -->'.PHP_EOL; 
echo '</div>   <!-- wrapper end  -->'.PHP_EOL; 

echo '<footer>'.PHP_EOL; 

//echo '<form action="https://www.coarbri.it/cgi-bin/search.cgi" method="post" class="cf">'.PHP_EOL; 
//echo '<input class="sbar" name="q" title="Search" type="text" />'.PHP_EOL; 
//echo '<button type="Submit">Cerca</button>'.PHP_EOL; 
//echo '</form>'.PHP_EOL; 

echo '      <form action="https://www.coarbri.it/sos-computer/assistenza/search.php?search=" method="POST">  '.PHP_EOL;
echo '          <input class="sbar" name="q" title="Cerca" type="text" accesskey="c" />'.PHP_EOL;
echo '          <button type="Submit">Cerca</button>'.PHP_EOL;
echo '      </form>'.PHP_EOL;



echo '<ul class="cf">'.PHP_EOL; 

echo '<li class="social-networks">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title first-child"><h4>Seguici</h4></li>'.PHP_EOL; 
echo '<li><a href="https://www.facebook.com" class="facebook">Facebook</a></li>'.PHP_EOL; 
echo '<li><a href="https://twitter.com" class="twitter">Twitter</a></li>'.PHP_EOL; 
echo '<li><a href="https://plus.google.com" rel="publisher" class="google">Google+</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.pinterest.com" class="pinterest">Pinterest</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.youtube.com" class="youtube">YouTube</a></li>'.PHP_EOL; 
// echo '<li><a href="/rss.htm" class="rss">RSS</a></li>'.PHP_EOL; 
echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="recent-pages">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title"><h4>Pagine aggiunte di recente</h4></li>'.PHP_EOL; 
echo '<li id="ra1"></li>'.PHP_EOL; 
echo '<li id="ra2"></li>'.PHP_EOL; 
echo '<li id="ra3"></li>'.PHP_EOL; 
echo '<li id="ra4"></li>'.PHP_EOL; 
echo '<li id="ra5"></li>'.PHP_EOL; 
echo '<li>Non ci sono aggiornamenti da visualizzare</li>'.PHP_EOL; 

echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="useful-links">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
/*
echo '<li class="widget-title"><h4>Link utili</h4></li>'.PHP_EOL; 
echo '<li><a href="/more.htm">Info SOS-Computer</a></li>'.PHP_EOL; 
echo '<li><a href="/sindex.htm">Mappa sito</a></li>'.PHP_EOL; 
echo '<li><a href="/forum/">Forum</a></li>'.PHP_EOL; 
echo '<li><a href="/contact/">Contattaci</a></li>'.PHP_EOL; 
echo '<li><a href="/issues/ch000586.htm">Come aiutarci</a></li>'.PHP_EOL; 
echo '<li><a href="/chtop10.htm">Migliori 10 pagine</a></li>'.PHP_EOL; 
*/

echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '</ul>'.PHP_EOL; 
echo '<div class="copyright">&copy; 2018 SOS-Computer<br><a href="http://www.coarbri.it/privacy.html" class="legal">Leggi informativa sulla Privacy</a><br>SOS Computer : Via D.Alighieri, 28 - Lurago d&#039Erba (CO) - Milano Città Via Copernico, 38</div>'.PHP_EOL; 
echo '</footer>'.PHP_EOL; 

}

function sospcArticleEndBis($footerString){

echo '</article>'.PHP_EOL;

// -----------------------------------------------------------------
echo '<div id="meta_wrap" class="cf">'.PHP_EOL;
echo '<ul class="options cf">'.PHP_EOL;
echo '<li class="useful-page"> <span class="nolink">Le informazioni sono risultate utili?</span> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?yes" rel="nofollow" class="first-child">Si</a> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?no" rel="nofollow">No</a></li>'.PHP_EOL;
echo '<li>'.PHP_EOL;
echo '<ul>'.PHP_EOL;
// echo '<li class="feedback"><a href="/feedback/" rel="nofollow" title="Lasciaci un commento">il tuo commento</a></li>'.PHP_EOL;
echo '<li class="email"><a href="mailto:info@coarbri.it" rel="nofollow" title="e-mail">inviaci una e-mail</a></li>'.PHP_EOL;
echo '<li class="first-child print"><a href="#" onclick="window.print();return false;" rel="nofollow" title="Stampa una copia della pagina">Stampa</a></li>'.PHP_EOL;

echo '</ul>'.PHP_EOL;
echo '</li>'.PHP_EOL;
echo '</ul>'.PHP_EOL;
echo '</div>'.PHP_EOL;
// -----------------------------------------------------------------

echo '</div>   <!-- class container content end -->'.PHP_EOL; 
echo '</div>   <!-- wrapper end  -->'.PHP_EOL; 

echo '<footer>'.PHP_EOL; 

//echo '<form action="https://www.coarbri.it/cgi-bin/search.cgi" method="post" class="cf">'.PHP_EOL; 
//echo '<input class="sbar" name="q" title="Search" type="text" />'.PHP_EOL; 
//echo '<button type="Submit">Cerca</button>'.PHP_EOL; 
//echo '</form>'.PHP_EOL; 

echo '      <form action="https://www.coarbri.it/sos-computer/assistenza/search.php?search=" method="POST">  '.PHP_EOL;
echo '          <input class="sbar" name="q" title="Cerca" type="text" accesskey="c" />'.PHP_EOL;
echo '          <button type="Submit">Cerca</button>'.PHP_EOL;
echo '      </form>'.PHP_EOL;



echo '<ul class="cf">'.PHP_EOL; 

echo '<li class="social-networks">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title first-child"><h4>Seguici</h4></li>'.PHP_EOL; 
echo '<li><a href="https://www.facebook.com" class="facebook">Facebook</a></li>'.PHP_EOL; 
echo '<li><a href="https://twitter.com" class="twitter">Twitter</a></li>'.PHP_EOL; 
echo '<li><a href="https://plus.google.com" rel="publisher" class="google">Google+</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.pinterest.com" class="pinterest">Pinterest</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.youtube.com" class="youtube">YouTube</a></li>'.PHP_EOL; 
// echo '<li><a href="/rss.htm" class="rss">RSS</a></li>'.PHP_EOL; 
echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="recent-pages">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title"><h4>Pagine aggiunte di recente</h4></li>'.PHP_EOL; 
echo '<li id="ra1"></li>'.PHP_EOL; 
echo '<li id="ra2"></li>'.PHP_EOL; 
echo '<li id="ra3"></li>'.PHP_EOL; 
echo '<li id="ra4"></li>'.PHP_EOL; 
echo '<li id="ra5"></li>'.PHP_EOL; 
echo '<li>Non ci sono aggiornamenti da visualizzare</li>'.PHP_EOL; 

echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="useful-links">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
/*
echo '<li class="widget-title"><h4>Link utili</h4></li>'.PHP_EOL; 
echo '<li><a href="/more.htm">Info SOS-Computer</a></li>'.PHP_EOL; 
echo '<li><a href="/sindex.htm">Mappa sito</a></li>'.PHP_EOL; 
echo '<li><a href="/forum/">Forum</a></li>'.PHP_EOL; 
echo '<li><a href="/contact/">Contattaci</a></li>'.PHP_EOL; 
echo '<li><a href="/issues/ch000586.htm">Come aiutarci</a></li>'.PHP_EOL; 
echo '<li><a href="/chtop10.htm">Migliori 10 pagine</a></li>'.PHP_EOL; 
*/

echo $footerString.PHP_EOL; 


echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '</ul>'.PHP_EOL; 
echo '<div class="copyright">&copy; 2018 SOS-Computer<br><a href="http://www.coarbri.it/privacy.html" class="legal">Leggi informativa sulla Privacy</a><br>SOS Computer : Via D.Alighieri, 28 - Lurago d&#039Erba (CO) - Milano Città Via Copernico, 38</div>'.PHP_EOL; 

echo '</footer>'.PHP_EOL; 

}



function sospcArticleEndWebLayout(){

echo '</article>'.PHP_EOL;

// -----------------------------------------------------------------
/*
echo '<div id="meta_wrap" class="cf">'.PHP_EOL;
echo '<ul class="options cf">'.PHP_EOL;
echo '<li class="useful-page"> <span class="nolink">Le informazioni sono risultate utili?</span> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?yes" rel="nofollow" class="first-child">Si</a> <a href="https://www.coarbri.it/sos-computer/assistenza/questionYesNo.php?no" rel="nofollow">No</a></li>'.PHP_EOL;
echo '<li>'.PHP_EOL;
echo '<ul>'.PHP_EOL;
// echo '<li class="feedback"><a href="/feedback/" rel="nofollow" title="Lasciaci un commento">il tuo commento</a></li>'.PHP_EOL;
echo '<li class="email"><a href="mailto:info@coarbri.it" rel="nofollow" title="e-mail">inviaci una e-mail</a></li>'.PHP_EOL;
echo '<li class="first-child print"><a href="#" onclick="window.print();return false;" rel="nofollow" title="Stampa una copia della pagina">Stampa</a></li>'.PHP_EOL;

echo '</ul>'.PHP_EOL;
echo '</li>'.PHP_EOL;
echo '</ul>'.PHP_EOL;
echo '</div>'.PHP_EOL;
*/
// -----------------------------------------------------------------

echo '</div>   <!-- class container content end -->'.PHP_EOL; 
echo '</div>   <!-- wrapper end  -->'.PHP_EOL; 

echo '<footer>'.PHP_EOL; 

//echo '<form action="https://www.coarbri.it/cgi-bin/search.cgi" method="post" class="cf">'.PHP_EOL; 
//echo '<input class="sbar" name="q" title="Search" type="text" />'.PHP_EOL; 
//echo '<button type="Submit">Cerca</button>'.PHP_EOL; 
//echo '</form>'.PHP_EOL; 

/*

echo '      <form action="https://www.coarbri.it/sos-computer/assistenza/search.php?search=" method="POST">  '.PHP_EOL;
echo '          <input class="sbar" name="q" title="Cerca" type="text" accesskey="c" />'.PHP_EOL;
echo '          <button type="Submit">Cerca</button>'.PHP_EOL;
echo '      </form>'.PHP_EOL;



echo '<ul class="cf">'.PHP_EOL; 

echo '<li class="social-networks">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title first-child"><h4>Seguici</h4></li>'.PHP_EOL; 
echo '<li><a href="https://www.facebook.com" class="facebook">Facebook</a></li>'.PHP_EOL; 
echo '<li><a href="https://twitter.com" class="twitter">Twitter</a></li>'.PHP_EOL; 
echo '<li><a href="https://plus.google.com" rel="publisher" class="google">Google+</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.pinterest.com" class="pinterest">Pinterest</a></li>'.PHP_EOL; 
echo '<li><a href="https://www.youtube.com" class="youtube">YouTube</a></li>'.PHP_EOL; 
// echo '<li><a href="/rss.htm" class="rss">RSS</a></li>'.PHP_EOL; 
echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="recent-pages">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 
echo '<li class="widget-title"><h4>Pagine aggiunte di recente</h4></li>'.PHP_EOL; 
echo '<li id="ra1"></li>'.PHP_EOL; 
echo '<li id="ra2"></li>'.PHP_EOL; 
echo '<li id="ra3"></li>'.PHP_EOL; 
echo '<li id="ra4"></li>'.PHP_EOL; 
echo '<li id="ra5"></li>'.PHP_EOL; 
echo '<li>Non ci sono aggiornamenti da visualizzare</li>'.PHP_EOL; 

echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '<li class="useful-links">'.PHP_EOL; 
echo '<ol>'.PHP_EOL; 

echo '<li class="widget-title"><h4>Link utili</h4></li>'.PHP_EOL; 
echo '<li><a href="/more.htm">Info SOS-Computer</a></li>'.PHP_EOL; 
echo '<li><a href="/sindex.htm">Mappa sito</a></li>'.PHP_EOL; 
echo '<li><a href="/forum/">Forum</a></li>'.PHP_EOL; 
echo '<li><a href="/contact/">Contattaci</a></li>'.PHP_EOL; 
echo '<li><a href="/issues/ch000586.htm">Come aiutarci</a></li>'.PHP_EOL; 
echo '<li><a href="/chtop10.htm">Migliori 10 pagine</a></li>'.PHP_EOL; 

echo '</ol>'.PHP_EOL; 
echo '</li>'.PHP_EOL; 

echo '</ul>'.PHP_EOL; 

*/

echo '<div class="copyright">&copy; 2018 SOS-Computer<br><a href="http://www.coarbri.it/privacy.html" class="legal">Leggi informativa sulla Privacy</a></div>'.PHP_EOL; 
echo '</footer>'.PHP_EOL; 

}



function sospcTip($image, $alt, $width, $height, $message){

echo '<p class="tab"><span class="tips"><img src="' . $image . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" class="floatRight">Tip:</span> ' . $message . '</p> '.PHP_EOL; 

}

function sospcArticleIntro($message){
    echo '<p class="intro">' . $message  . '</p>'.PHP_EOL; 
}

function sospcArticleParagraphTitle($message){
    echo '<h2>' . $message . '</h2>'.PHP_EOL; 
}

function sospcArcticleParagraph($message){
    echo '<p class="tab">' . $message . '</p> '.PHP_EOL; 
}

function sospcArticleArrowedParagraph($message){
echo '<ul>' . $message . '</ul>'.PHP_EOL; 
}


function sospcArticleAdditionalInfoBegin(){
    echo '<div class="additional">'.PHP_EOL; 
    echo '<h3>informazioni aggiuntive</h3>'.PHP_EOL; 
    echo '<ul class="additional-information">'.PHP_EOL; 
}
function sospcArticleAdditionalInfoItem($message){
    echo '<li>' . $message . '</li>'.PHP_EOL; 
}
function sospcArticleAdditionalInfoEnd(){
    echo '</ul>'.PHP_EOL; 
    echo '</div>'.PHP_EOL; 
}

function sospc_tagA_Href($mode, $href, $text){
    $find = array("http://www.coarbri.it/","https://www.coarbri.it/");
    $replace = array("/var/www/public_html/coarbri.it/");
    $arr = array($href);
    $tmp=str_replace($find,$replace,$arr);
    $localHref="/var/www/public_html/coarbri.it/" . $tmp[0];
    
    if(file_exists($localHref)){
        echo "<a href=" . $href . ">" .  $text . "</a>"; 
    }else{
        //echo "<strong style='text-decoration: underline;' >" .  $text . "</strong>"; 
        echo "<strong style='color:#999999;' >" .  $text . "</strong>"; 
    };
}

function sospcElencoPaesi(){
    echo 'Erba, Como, Bellagio, Lecco, Oggiono, Giussano, Desio, Cantù, Nesso, Lezzeno, Magreglio, Onno, Valmadrera, Pescate, Canzo, Asso, Albese, Albese con Cassano, Albavilla, Bosissio, Bosisio Parini, Civate, Merone, Costa, Costa Masnaga, Cassago, Cassago Brianza, Monticello, Calco, Merate, Inverigo, Besana, Besana in Brianza, Casatenovo, Usmate, Usmate Velate, Arcore, Verano, Verano Brianza, Carate, Carate Brianza, Meda, Seveso, Desio, Lissone, Vimenrcate, Cesano, Cesano Maderno, Mariano, Mariano Comense, Limonta, Casate, Lezzeno, Rovenza, Civenna, Piano Rancio, Magreglio, Barni, Veleso, Veleso Zelbio, Lasnigo, Valbrona, Moregge, Sormano, Caglio, Rezzago, Asso, Palanzo, Bicogno, Torno, Villa Pliniana, Piazzaga, Caslino, Castelmarte, Ponte Lambro, Longone, Longone al segrino, Cesana, Cesana Brianza, Sala, Sala al barro, Galbiate, Ello, Oggiono, Annone, Annone di Brianza, Dolzago, Colle, Colle Brianza, Giovenzana, Santa Maria, Santa Maria Hoè, Rovagnate, Barzago, Barzanò, Molteno, Nibionno, Brenna, Cascina Pelada, Parravicino, Orsenigo, Alzate, Alzate Brianza, Lipomo, Capiago, Intimiano, Capiago Intimiano, Figino, Figino Serenza, Carugo, Briosco, Missaglia, Novedrate, Mariano, Mariano Comense, Carugo, Villa Raverio, Montesiro, Maresso, Rogoredo, Paina, Cabiate, Camnago, Triuggio, Correzzana, Camparada, Carnate, Macherio, Gerno, Lesmo, Santa Margherita, Bovisio, Bovisio Masciago, Muggiò, Boscherona, Concorezzo, Monguzzo, Lurago di Erba, Monza, Biassono';
}

function sinonimo($wd){
    echo $wd;
}




?>
