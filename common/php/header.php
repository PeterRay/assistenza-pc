<?php


function sospcTes(){
    echo '  <h1>TES</h1>'.PHP_EOL; 
};

function sospcComposeHeader(
            $title,                             // <title>What is a Battery?</title>
            $base_href,                         // <base href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_rel_canonical,                // <link rel="canonical" href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_href_css,                     // <link href="https://www.computerhope.com/cdn/site.css" type="text/css" rel="stylesheet" />
            $meta_keywords,                     // keywords    
            $meta_content,                      // <meta content="Computer dictionary definition for what battery means including related links, information, and terms." name="description" />
            $meta_itemprop_name,                // <meta itemprop="name" content="What is a Battery?" />
            $meta_itemprop_description,         // <meta itemprop="description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_url,              // <meta property="og:url" content="https://www.computerhope.com/jargon/b/battery.htm" />
            $meta_property_og_description,      // <meta property="og:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_title,            // <meta property="og:title" content="What is a Battery?" />
            $meta_property_og_type,             // <meta property="og:type" content="article" />
            $meta_name_twitter_title,           // <meta name="twitter:title" content="What is a Battery?" />
            $meta_name_twitter_description,     // <meta name="twitter:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_image,            // <meta property="og:image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $meta_itemprop_image,               // <meta itemprop="image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_image_src,                // <link rel="image_src" href="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_alternate                 // <link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="https://feeds.feedburner.com/LatestNewPagesOnComputerHope" />
){
   

echo '<!DOCTYPE html>'.PHP_EOL;
echo '<!--[if lt IE 7]><html class="ie6 ie"><![endif]--><!--[if IE 7]><html class="ie7 ie"><![endif]--><!--[if IE 8]><html class="ie8 ie"><![endif]--><!--[if IE 9]><html class="ie9 ie"><![endif]-->'.PHP_EOL;
// echo '<html amp lang="it" itemscope itemtype="http://schema.org/WebPage">'.PHP_EOL;
echo '<meta charset="utf-8">'.PHP_EOL;
// echo '<script async src="https://cdn.ampproject.org/v0.js"></script>'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">'.PHP_EOL;

echo '<link rel="alternate" hreflang="it_IT" href="' . $base_href . '" />'.PHP_EOL;

echo '<head>'.PHP_EOL;
echo '<title>' . $title . '</title>'.PHP_EOL;
echo '<base href="' . $base_href . '" />'.PHP_EOL;
echo '<link rel="canonical" href="' . $link_rel_canonical . '" />'.PHP_EOL;
echo '<link href="' . $link_href_css . '" type="text/css" rel="stylesheet" />'.PHP_EOL;
echo '<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->'.PHP_EOL;
echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />'.PHP_EOL;

echo '<meta name="keywords" content="' . $meta_keywords . '" />'.PHP_EOL; 
echo '<meta name="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL; 

echo '<meta content="' . $meta_content . '" name="description" />'.PHP_EOL;
echo '<meta itemprop="name" content=" ' . $meta_itemprop_name . '" />'.PHP_EOL;
echo '<meta itemprop="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL;
echo '<meta property="og:url" content="' . $meta_property_og_url . '" />'.PHP_EOL;
echo '<meta property="og:description" content="' . $meta_property_og_description . '" />'.PHP_EOL;
echo '<meta property="og:title" content="' . $meta_property_og_title . '" />'.PHP_EOL;
echo '<meta property="og:type" content="' . $meta_property_og_type . '" />'.PHP_EOL;
echo '<meta name="twitter:card" content="summary" />'.PHP_EOL;
echo '<meta name="twitter:title" content="' . $meta_name_twitter_title . '" />'.PHP_EOL;
echo '<meta name="twitter:description" content="' . $meta_name_twitter_description . '" />'.PHP_EOL;
echo '<meta name="twitter:creator" content="@coarbri" />'.PHP_EOL;
echo '<!--[if lt IE 9]>'.PHP_EOL;
echo '<script src="https://www.coarbri.it/myscript.js"></script>'.PHP_EOL;
echo '<![endif]-->'.PHP_EOL;
echo '<meta property="og:image" content="' . $meta_property_og_image . '" />'.PHP_EOL;
echo '<meta itemprop="image" content="' . $meta_itemprop_image . '" />'.PHP_EOL;
echo '<link rel="image_src" href="' . $link_rel_image_src  . '" />'.PHP_EOL;
echo '<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="' . $link_rel_alternate  . '" />'.PHP_EOL;
echo '<link rel="apple-touch-icon" href="https://www.coarbri.it/sospc/apple-touch-icon.png" />'.PHP_EOL;
echo '<link rel="shortcut icon" href="https://www.coarbri.it/sospc/favicon.ico" type="image/x-icon" />'.PHP_EOL;
# echo '<script>'.PHP_EOL;
echo '<!--  shared Google code begin{   -->'.PHP_EOL;
echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51904967-3"></script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo '  window.dataLayer = window.dataLayer || [];'.PHP_EOL;
echo '  function gtag(){ dataLayer.push(arguments); };'.PHP_EOL;
echo '  gtag("js", new Date());'.PHP_EOL;
echo '  gtag("config", "UA-51904967-3");'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<meta name="google-site-verification" content="1iD7D2q-PPA9EAtfTBbu7qlcLYekA4_9zRAGB-hWP0s" />'.PHP_EOL;
echo '<!--  }end if shared Google code  -->'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '            {'.PHP_EOL;
echo '                "@context" : "http://schema.org",'.PHP_EOL;
echo '                "@type" : "LocalBusiness",'.PHP_EOL;
echo '                "name" : "coarbri",'.PHP_EOL;
echo '                "telephone" : "(+39)347-4618653",'.PHP_EOL;
echo '                "email" : "info@coarbri.it",'.PHP_EOL;
echo '                "priceRange" : "euro-modico",'.PHP_EOL; 
echo '                "image": ['.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/assistenza/data/sos-computer.png"'.PHP_EOL;
echo '                ],'.PHP_EOL;

echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "via Roma 28",'.PHP_EOL;
echo '                    "addressLocality" : "Lurago d&#039Erba",'.PHP_EOL;
echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "22040"'.PHP_EOL;
echo '                },'.PHP_EOL;
// echo '                "address" : {'.PHP_EOL;
// echo '                    "@type" : "PostalAddress",'.PHP_EOL;
// echo '                    "streetAddress" : "via Copernico 38",'.PHP_EOL;
// echo '                    "addressLocality" : "Milano",'.PHP_EOL;
// echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
// echo '                    "addressCountry" : "Italia",'.PHP_EOL;
// echo '                    "postalCode" : "22138"'.PHP_EOL;
// echo '                },'.PHP_EOL;
echo '                "openingHoursSpecification" : {'.PHP_EOL;
echo '                    "@type" : "OpeningHoursSpecification",'.PHP_EOL;
echo '                    "opens" : "08:30",'.PHP_EOL;
echo '                    "closes" : "18:30"'.PHP_EOL;
echo '                },'.PHP_EOL;
echo '                "aggregateRating": {'.PHP_EOL;
echo '                      "@type": "AggregateRating",'.PHP_EOL;
echo '                      "ratingValue": "5.0",'.PHP_EOL;
echo '                      "reviewCount": "41"'.PHP_EOL;
echo '                }'.PHP_EOL;
echo '            }'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Organization",'.PHP_EOL;
echo '  "url": "https://www.coarbri.it",'.PHP_EOL;
echo '  "logo": "https://www.coarbri.it/sos-computer/assets/assistenza/sospc-logo.jpg",'.PHP_EOL;
echo '  "contactPoint": [{'.PHP_EOL;
echo '    "@type": "ContactPoint",'.PHP_EOL;
echo '    "telephone": "(+39)347-4618653",'.PHP_EOL;
echo '    "contactType": "customer service"'.PHP_EOL;
echo '  }]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Person",'.PHP_EOL;
echo '  "name": "coarbri",'.PHP_EOL;
echo '  "url": "http://www.coarbri.it",'.PHP_EOL;
echo '  "sameAs": ['.PHP_EOL;
echo '    "https://www.facebook.com/Assistenza-Pc-Smartphones-Tablets-278941075605985"'.PHP_EOL;
echo '  ]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;


echo '</head>'.PHP_EOL; 
};

function sospcComposeHeaderVer2(
            $title,                             // <title>What is a Battery?</title>
            $base_href,                         // <base href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_rel_canonical,                // <link rel="canonical" href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_href_css,                     // <link href="https://www.computerhope.com/cdn/site.css" type="text/css" rel="stylesheet" />
            $meta_keywords,                     // keywords    
            $meta_content,                      // <meta content="Computer dictionary definition for what battery means including related links, information, and terms." name="description" />
            $meta_itemprop_name,                // <meta itemprop="name" content="What is a Battery?" />
            $meta_itemprop_description,         // <meta itemprop="description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_url,              // <meta property="og:url" content="https://www.computerhope.com/jargon/b/battery.htm" />
            $meta_property_og_description,      // <meta property="og:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_title,            // <meta property="og:title" content="What is a Battery?" />
            $meta_property_og_type,             // <meta property="og:type" content="article" />
            $meta_name_twitter_title,           // <meta name="twitter:title" content="What is a Battery?" />
            $meta_name_twitter_description,     // <meta name="twitter:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_image,            // <meta property="og:image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $meta_itemprop_image,               // <meta itemprop="image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_image_src,                // <link rel="image_src" href="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_alternate,                 // <link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="https://feeds.feedburner.com/LatestNewPagesOnComputerHope" />
            
            $meta_region,
            $meta_città,
            $meta_via,
            $meta_num_civico,
            $meta_cap,
            $meta_provincia            
){
   

echo '<!DOCTYPE html>'.PHP_EOL;
echo '<!--[if lt IE 7]><html class="ie6 ie"><![endif]--><!--[if IE 7]><html class="ie7 ie"><![endif]--><!--[if IE 8]><html class="ie8 ie"><![endif]--><!--[if IE 9]><html class="ie9 ie"><![endif]-->'.PHP_EOL;
// echo '<html amp lang="it" itemscope itemtype="http://schema.org/WebPage">'.PHP_EOL;
echo '<meta charset="utf-8">'.PHP_EOL;
// echo '<script async src="https://cdn.ampproject.org/v0.js"></script>'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">'.PHP_EOL;

echo '<link rel="alternate" hreflang="it_IT" href="' . $base_href . '" />'.PHP_EOL;

echo '<head>'.PHP_EOL;
echo '<title>' . $title . '</title>'.PHP_EOL;
echo '<base href="' . $base_href . '" />'.PHP_EOL;
echo '<link rel="canonical" href="' . $link_rel_canonical . '" />'.PHP_EOL;
echo '<link href="' . $link_href_css . '" type="text/css" rel="stylesheet" />'.PHP_EOL;
echo '<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->'.PHP_EOL;
echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />'.PHP_EOL;

echo '<meta name="keywords" content="' . $meta_keywords . '" />'.PHP_EOL; 
echo '<meta name="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL; 

echo '<meta content="' . $meta_content . '" name="description" />'.PHP_EOL;
echo '<meta itemprop="name" content=" ' . $meta_itemprop_name . '" />'.PHP_EOL;
echo '<meta itemprop="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL;
echo '<meta property="og:url" content="' . $meta_property_og_url . '" />'.PHP_EOL;
echo '<meta property="og:description" content="' . $meta_property_og_description . '" />'.PHP_EOL;
echo '<meta property="og:title" content="' . $meta_property_og_title . '" />'.PHP_EOL;
echo '<meta property="og:type" content="' . $meta_property_og_type . '" />'.PHP_EOL;
echo '<meta name="twitter:card" content="summary" />'.PHP_EOL;
echo '<meta name="twitter:title" content="' . $meta_name_twitter_title . '" />'.PHP_EOL;
echo '<meta name="twitter:description" content="' . $meta_name_twitter_description . '" />'.PHP_EOL;
echo '<meta name="twitter:creator" content="@coarbri" />'.PHP_EOL;
echo '<!--[if lt IE 9]>'.PHP_EOL;
echo '<script src="https://www.coarbri.it/myscript.js"></script>'.PHP_EOL;
echo '<![endif]-->'.PHP_EOL;
echo '<meta property="og:image" content="' . $meta_property_og_image . '" />'.PHP_EOL;
echo '<meta itemprop="image" content="' . $meta_itemprop_image . '" />'.PHP_EOL;
echo '<link rel="image_src" href="' . $link_rel_image_src  . '" />'.PHP_EOL;
echo '<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="' . $link_rel_alternate  . '" />'.PHP_EOL;
echo '<link rel="apple-touch-icon" href="https://www.coarbri.it/sospc/apple-touch-icon.png" />'.PHP_EOL;
echo '<link rel="shortcut icon" href="https://www.coarbri.it/sospc/favicon.ico" type="image/x-icon" />'.PHP_EOL;
# echo '<script>'.PHP_EOL;
echo '<!--  shared Google code begin{   -->'.PHP_EOL;
echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51904967-3"></script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo '  window.dataLayer = window.dataLayer || [];'.PHP_EOL;
echo '  function gtag(){ dataLayer.push(arguments); };'.PHP_EOL;
echo '  gtag("js", new Date());'.PHP_EOL;
echo '  gtag("config", "UA-51904967-3");'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<meta name="google-site-verification" content="1iD7D2q-PPA9EAtfTBbu7qlcLYekA4_9zRAGB-hWP0s" />'.PHP_EOL;
echo '<!--  }end if shared Google code  -->'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '            {'.PHP_EOL;
echo '                "@context" : "http://schema.org",'.PHP_EOL;
echo '                "@type" : "LocalBusiness",'.PHP_EOL;
echo '                "name" : "coarbri",'.PHP_EOL;
echo '                "telephone" : "(+39)347-4618653",'.PHP_EOL;
echo '                "email" : "info@coarbri.it",'.PHP_EOL;
echo '                "priceRange" : "euro-modico",'.PHP_EOL; 
echo '                "image": ['.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/assistenza/data/sos-computer.png"'.PHP_EOL;
echo '                ],'.PHP_EOL;
            
echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "' . $meta_via . ', ' . $meta_num_civico . '",'.PHP_EOL;
echo '                    "addressLocality" : "' .$meta_città. '",'.PHP_EOL;
echo '                    "addressRegion" : "' . $meta_provincia . '",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "' . $meta_cap . '"'.PHP_EOL;
echo '                },'.PHP_EOL;

/*            
echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "via Roma 28",'.PHP_EOL;
echo '                    "addressLocality" : "Lurago d&#039Erba",'.PHP_EOL;
echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "22040"'.PHP_EOL;
echo '                },'.PHP_EOL;

echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "via Copernico 38",'.PHP_EOL;
echo '                    "addressLocality" : "Milano",'.PHP_EOL;
echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "22138"'.PHP_EOL;
echo '                },'.PHP_EOL;

echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" :   "' . $meta_via . '",'.PHP_EOL;
echo '                    "addressLocality" : "' .  $meta_città  . '",'.PHP_EOL;
echo '                    "addressRegion" :   "' .  $meta_region . '",'.PHP_EOL;
echo '                    "addressCountry" :  "Italia",'.PHP_EOL;
echo '                    "postalCode" : ""'.PHP_EOL;
echo '                },'.PHP_EOL;
*/

echo '                "openingHoursSpecification" : {'.PHP_EOL;
echo '                    "@type" : "OpeningHoursSpecification",'.PHP_EOL;
echo '                    "opens" : "08:30",'.PHP_EOL;
echo '                    "closes" : "18:30"'.PHP_EOL;
echo '                },'.PHP_EOL;
echo '                "aggregateRating": {'.PHP_EOL;
echo '                      "@type": "AggregateRating",'.PHP_EOL;
echo '                      "ratingValue": "5.0",'.PHP_EOL;
echo '                      "reviewCount": "43"'.PHP_EOL;
echo '                }'.PHP_EOL;
echo '            }'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Organization",'.PHP_EOL;
echo '  "url": "https://www.coarbri.it",'.PHP_EOL;
echo '  "logo": "https://www.coarbri.it/sos-computer/assistenza/data/sos-computer.png",'.PHP_EOL;
echo '  "contactPoint": [{'.PHP_EOL;
echo '    "@type": "ContactPoint",'.PHP_EOL;
echo '    "telephone": "(+39)347-4618653",'.PHP_EOL;
echo '    "contactType": "customer service"'.PHP_EOL;
echo '  }]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Person",'.PHP_EOL;
echo '  "name": "coarbri",'.PHP_EOL;
echo '  "url": "http://www.coarbri.it",'.PHP_EOL;
echo '  "sameAs": ['.PHP_EOL;
echo '    "https://www.facebook.com/Assistenza-Pc-Smartphones-Tablets-278941075605985"'.PHP_EOL;
echo '  ]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;


echo '</head>'.PHP_EOL; 
};



function sospcComposeHeaderCorsoEcdl(
            $title,                             // <title>What is a Battery?</title>
            $base_href,                         // <base href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_rel_canonical,                // <link rel="canonical" href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_href_css,                     // <link href="https://www.computerhope.com/cdn/site.css" type="text/css" rel="stylesheet" />
            $meta_keywords,                     // keywords    
            $meta_content,                      // <meta content="Computer dictionary definition for what battery means including related links, information, and terms." name="description" />
            $meta_itemprop_name,                // <meta itemprop="name" content="What is a Battery?" />
            $meta_itemprop_description,         // <meta itemprop="description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_url,              // <meta property="og:url" content="https://www.computerhope.com/jargon/b/battery.htm" />
            $meta_property_og_description,      // <meta property="og:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_title,            // <meta property="og:title" content="What is a Battery?" />
            $meta_property_og_type,             // <meta property="og:type" content="article" />
            $meta_name_twitter_title,           // <meta name="twitter:title" content="What is a Battery?" />
            $meta_name_twitter_description,     // <meta name="twitter:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_image,            // <meta property="og:image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $meta_itemprop_image,               // <meta itemprop="image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_image_src,                // <link rel="image_src" href="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_alternate                 // <link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="https://feeds.feedburner.com/LatestNewPagesOnComputerHope" />
){
   

echo '<!DOCTYPE html>'.PHP_EOL;
echo '<!--[if lt IE 7]><html class="ie6 ie"><![endif]--><!--[if IE 7]><html class="ie7 ie"><![endif]--><!--[if IE 8]><html class="ie8 ie"><![endif]--><!--[if IE 9]><html class="ie9 ie"><![endif]-->'.PHP_EOL;
// echo '<html amp lang="it" itemscope itemtype="http://schema.org/WebPage">'.PHP_EOL;
echo '<meta charset="utf-8">'.PHP_EOL;
// echo '<script async src="https://cdn.ampproject.org/v0.js"></script>'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">'.PHP_EOL;

echo '<link rel="alternate" hreflang="it_IT" href="' . $base_href . '" />'.PHP_EOL;

echo '<head>'.PHP_EOL;
echo '<title>' . $title . '</title>'.PHP_EOL;
echo '<base href="' . $base_href . '" />'.PHP_EOL;
echo '<link rel="canonical" href="' . $link_rel_canonical . '" />'.PHP_EOL;
echo '<link href="' . $link_href_css . '" type="text/css" rel="stylesheet" />'.PHP_EOL;
echo '<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->'.PHP_EOL;
echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />'.PHP_EOL;

echo '<meta name="keywords" content="' . $meta_keywords . '" />'.PHP_EOL; 
echo '<meta name="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL; 

echo '<meta content="' . $meta_content . '" name="description" />'.PHP_EOL;
echo '<meta itemprop="name" content=" ' . $meta_itemprop_name . '" />'.PHP_EOL;
echo '<meta itemprop="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL;
echo '<meta property="og:url" content="' . $meta_property_og_url . '" />'.PHP_EOL;
echo '<meta property="og:description" content="' . $meta_property_og_description . '" />'.PHP_EOL;
echo '<meta property="og:title" content="' . $meta_property_og_title . '" />'.PHP_EOL;
echo '<meta property="og:type" content="' . $meta_property_og_type . '" />'.PHP_EOL;
echo '<meta name="twitter:card" content="summary" />'.PHP_EOL;
echo '<meta name="twitter:title" content="' . $meta_name_twitter_title . '" />'.PHP_EOL;
echo '<meta name="twitter:description" content="' . $meta_name_twitter_description . '" />'.PHP_EOL;
echo '<meta name="twitter:creator" content="@coarbri" />'.PHP_EOL;
echo '<!--[if lt IE 9]>'.PHP_EOL;
echo '<script src="https://www.coarbri.it/myscript.js"></script>'.PHP_EOL;
echo '<![endif]-->'.PHP_EOL;
echo '<meta property="og:image" content="' . $meta_property_og_image . '" />'.PHP_EOL;
echo '<meta itemprop="image" content="' . $meta_itemprop_image . '" />'.PHP_EOL;
echo '<link rel="image_src" href="' . $link_rel_image_src  . '" />'.PHP_EOL;
echo '<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="' . $link_rel_alternate  . '" />'.PHP_EOL;
echo '<link rel="apple-touch-icon" href="https://www.coarbri.it/sospc/apple-touch-icon.png" />'.PHP_EOL;
echo '<link rel="shortcut icon" href="https://www.coarbri.it/sospc/favicon.ico" type="image/x-icon" />'.PHP_EOL;
# echo '<script>'.PHP_EOL;
echo '<!--  shared Google code begin{   -->'.PHP_EOL;
echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51904967-3"></script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo '  window.dataLayer = window.dataLayer || [];'.PHP_EOL;
echo '  function gtag(){ dataLayer.push(arguments); };'.PHP_EOL;
echo '  gtag("js", new Date());'.PHP_EOL;
echo '  gtag("config", "UA-51904967-3");'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<meta name="google-site-verification" content="1iD7D2q-PPA9EAtfTBbu7qlcLYekA4_9zRAGB-hWP0s" />'.PHP_EOL;
echo '<!--  }end if shared Google code  -->'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '            {'.PHP_EOL;
echo '                "@context" : "http://schema.org",'.PHP_EOL;
echo '                "@type" : "LocalBusiness",'.PHP_EOL;
echo '                "name" : "coarbri",'.PHP_EOL;
echo '                "telephone" : "(+39)347-4618653",'.PHP_EOL;
echo '                "email" : "info@coarbri.it",'.PHP_EOL;

echo '                "image": ['.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/corsi/ecdl/corso-ecdl.png",'.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/corsi/ecdl/ecdl-logo.jpeg"'.PHP_EOL;
echo '                ],'.PHP_EOL;

echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "via Roma 28",'.PHP_EOL;
echo '                    "addressLocality" : "Lurago d&#039Erba",'.PHP_EOL;
echo '                    "addressRegion" : "Lombardia (Co)",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "22040"'.PHP_EOL;
echo '                },'.PHP_EOL;
// echo '                "address" : {'.PHP_EOL;
// echo '                    "@type" : "PostalAddress",'.PHP_EOL;
// echo '                    "streetAddress" : "via Copernico 38",'.PHP_EOL;
// echo '                    "addressLocality" : "Milano",'.PHP_EOL;
// echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
// echo '                    "addressCountry" : "Italia",'.PHP_EOL;
// echo '                    "postalCode" : "22138"'.PHP_EOL;
// echo '                },'.PHP_EOL;
echo '                "openingHoursSpecification" : {'.PHP_EOL;
echo '                    "@type" : "OpeningHoursSpecification",'.PHP_EOL;
echo '                    "opens" : "08:30",'.PHP_EOL;
echo '                    "closes" : "18:30"'.PHP_EOL;
echo '                },'.PHP_EOL;
echo '                "aggregateRating": {'.PHP_EOL;
echo '                      "@type": "AggregateRating",'.PHP_EOL;
echo '                      "ratingValue": "4.7",'.PHP_EOL;
echo '                      "reviewCount": "21"'.PHP_EOL;
echo '                }'.PHP_EOL;
echo '            }'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Organization",'.PHP_EOL;
echo '  "url": "https://www.coarbri.it",'.PHP_EOL;
echo '  "logo": "https://www.coarbri.it/sos-computer/assistenza/data/sos-computer.png",'.PHP_EOL;
echo '  "contactPoint": [{'.PHP_EOL;
echo '    "@type": "ContactPoint",'.PHP_EOL;
echo '    "telephone": "+39-347-4618-653",'.PHP_EOL;
echo '    "contactType": "customer service"'.PHP_EOL;
echo '  }]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Person",'.PHP_EOL;
echo '  "name": "coarbri",'.PHP_EOL;
echo '  "url": "http://www.coarbri.it",'.PHP_EOL;
echo '  "sameAs": ['.PHP_EOL;
echo '    "https://www.facebook.com/Assistenza-Pc-Smartphones-Tablets-278941075605985"'.PHP_EOL;
echo '  ]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;


/* 
echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '"@context": "http://schema.org",'.PHP_EOL;
echo '"@type": "BreadcrumbList",'.PHP_EOL;
echo '"itemListElement": [{'.PHP_EOL;
echo '"@type": "ListItem",'.PHP_EOL;
echo '    "position": 1,'.PHP_EOL;
echo '    "name": "Category",'.PHP_EOL;
echo '    "item": "https://example.com/books"'.PHP_EOL;
echo '  },{'.PHP_EOL;
echo '    "@type": "ListItem",'.PHP_EOL;
echo '    "position": 2,'.PHP_EOL;
echo '    "name": "Authors",'.PHP_EOL;
echo '    "item": "https://example.com/books/authors"'.PHP_EOL;
echo '  }]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;
*/


# echo '</script>'.PHP_EOL;

//echo '<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>'.PHP_EOL;

echo '</head>'.PHP_EOL; 
};

function sospcComposeHeaderSitiWeb(
            $title,                             // <title>What is a Battery?</title>
            $base_href,                         // <base href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_rel_canonical,                // <link rel="canonical" href="https://www.computerhope.com/jargon/b/battery.htm" />
            $link_href_css,                     // <link href="https://www.computerhope.com/cdn/site.css" type="text/css" rel="stylesheet" />
            $meta_keywords,                     // keywords    
            $meta_content,                      // <meta content="Computer dictionary definition for what battery means including related links, information, and terms." name="description" />
            $meta_itemprop_name,                // <meta itemprop="name" content="What is a Battery?" />
            $meta_itemprop_description,         // <meta itemprop="description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_url,              // <meta property="og:url" content="https://www.computerhope.com/jargon/b/battery.htm" />
            $meta_property_og_description,      // <meta property="og:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_title,            // <meta property="og:title" content="What is a Battery?" />
            $meta_property_og_type,             // <meta property="og:type" content="article" />
            $meta_name_twitter_title,           // <meta name="twitter:title" content="What is a Battery?" />
            $meta_name_twitter_description,     // <meta name="twitter:description" content="Computer dictionary definition for what battery means including related links, information, and terms." />
            $meta_property_og_image,            // <meta property="og:image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $meta_itemprop_image,               // <meta itemprop="image" content="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_image_src,                // <link rel="image_src" href="https://www.computerhope.com/cdn/laptop-battery.jpg" />
            $link_rel_alternate                 // <link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="https://feeds.feedburner.com/LatestNewPagesOnComputerHope" />
){
   

echo '<!DOCTYPE html>'.PHP_EOL;
echo '<!--[if lt IE 7]><html class="ie6 ie"><![endif]--><!--[if IE 7]><html class="ie7 ie"><![endif]--><!--[if IE 8]><html class="ie8 ie"><![endif]--><!--[if IE 9]><html class="ie9 ie"><![endif]-->'.PHP_EOL;
// echo '<html amp lang="it" itemscope itemtype="http://schema.org/WebPage">'.PHP_EOL;
echo '<meta charset="utf-8">'.PHP_EOL;
//echo '<script async src="https://cdn.ampproject.org/v0.js"></script>'.PHP_EOL;
//echo '<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">'.PHP_EOL;

echo '<link rel="alternate" hreflang="it_IT" href="' . $base_href . '" />'.PHP_EOL;

echo '<head>'.PHP_EOL;
echo '<title>' . $title . '</title>'.PHP_EOL;
echo '<base href="' . $base_href . '" />'.PHP_EOL;
echo '<link rel="canonical" href="' . $link_rel_canonical . '" />'.PHP_EOL;
// echo '<link href="' . $link_href_css . '" type="text/css" rel="stylesheet" />'.PHP_EOL;
echo '<link rel="stylesheet" href="https://www.coarbri.it/web-agency/assets/css/main.css" />'.PHP_EOL;
echo '<!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->'.PHP_EOL;
echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />'.PHP_EOL;
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0" />'.PHP_EOL;

echo '<meta name="keywords" content="' . $meta_keywords . '" />'.PHP_EOL; 
echo '<meta name="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL; 

echo '<meta content="' . $meta_content . '" name="description" />'.PHP_EOL;
echo '<meta itemprop="name" content=" ' . $meta_itemprop_name . '" />'.PHP_EOL;
echo '<meta itemprop="description" content="' . $meta_itemprop_description . '" />'.PHP_EOL;
echo '<meta property="og:url" content="' . $meta_property_og_url . '" />'.PHP_EOL;
echo '<meta property="og:description" content="' . $meta_property_og_description . '" />'.PHP_EOL;
echo '<meta property="og:title" content="' . $meta_property_og_title . '" />'.PHP_EOL;
echo '<meta property="og:type" content="' . $meta_property_og_type . '" />'.PHP_EOL;
echo '<meta name="twitter:card" content="summary" />'.PHP_EOL;
echo '<meta name="twitter:title" content="' . $meta_name_twitter_title . '" />'.PHP_EOL;
echo '<meta name="twitter:description" content="' . $meta_name_twitter_description . '" />'.PHP_EOL;
echo '<meta name="twitter:creator" content="@coarbri" />'.PHP_EOL;
echo '<!--[if lt IE 9]>'.PHP_EOL;
echo '<script src="https://www.coarbri.it/myscript.js"></script>'.PHP_EOL;
echo '<![endif]-->'.PHP_EOL;
echo '<meta property="og:image" content="' . $meta_property_og_image . '" />'.PHP_EOL;
echo '<meta itemprop="image" content="' . $meta_itemprop_image . '" />'.PHP_EOL;
echo '<link rel="image_src" href="' . $link_rel_image_src  . '" />'.PHP_EOL;
echo '<link rel="alternate" type="application/rss+xml" title="RSS-Feed" href="' . $link_rel_alternate  . '" />'.PHP_EOL;
echo '<link rel="apple-touch-icon" href="https://www.coarbri.it/sospc/apple-touch-icon.png" />'.PHP_EOL;
echo '<link rel="shortcut icon" href="https://www.coarbri.it/sospc/favicon.ico" type="image/x-icon" />'.PHP_EOL;
# echo '<script>'.PHP_EOL;
echo '<!--  shared Google code begin{   -->'.PHP_EOL;
echo '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51904967-3"></script>'.PHP_EOL;
echo '<script>'.PHP_EOL;
echo '  window.dataLayer = window.dataLayer || [];'.PHP_EOL;
echo '  function gtag(){ dataLayer.push(arguments); };'.PHP_EOL;
echo '  gtag("js", new Date());'.PHP_EOL;
echo '  gtag("config", "UA-51904967-3");'.PHP_EOL;
echo '</script>'.PHP_EOL;
echo '<meta name="google-site-verification" content="1iD7D2q-PPA9EAtfTBbu7qlcLYekA4_9zRAGB-hWP0s" />'.PHP_EOL;
echo '<!--  }end if shared Google code  -->'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '            {'.PHP_EOL;
echo '                "@context" : "http://schema.org",'.PHP_EOL;
echo '                "@type" : "LocalBusiness",'.PHP_EOL;
echo '                "name" : "coarbri",'.PHP_EOL;
echo '                "telephone" : "(+39)347-4618653",'.PHP_EOL;
echo '                "email" : "info@coarbri.it",'.PHP_EOL;
echo '                "priceRange" : "euro medio",'.PHP_EOL;
echo '                "image": ['.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/images/informatica.jpg",'.PHP_EOL;
echo '                    "https://www.coarbri.it/sos-computer/assistenza/data/sos-pc.png"'.PHP_EOL;
echo '                ],'.PHP_EOL;

echo '                "address" : {'.PHP_EOL;
echo '                    "@type" : "PostalAddress",'.PHP_EOL;
echo '                    "streetAddress" : "via Roma 28",'.PHP_EOL;
echo '                    "addressLocality" : "Lurago d&#039Erba",'.PHP_EOL;
echo '                    "addressRegion" : "Lombardia (Co)",'.PHP_EOL;
echo '                    "addressCountry" : "Italia",'.PHP_EOL;
echo '                    "postalCode" : "22040"'.PHP_EOL;
echo '                },'.PHP_EOL;
// echo '                "address" : {'.PHP_EOL;
// echo '                    "@type" : "PostalAddress",'.PHP_EOL;
// echo '                    "streetAddress" : "via Copernico 38",'.PHP_EOL;
// echo '                    "addressLocality" : "Milano",'.PHP_EOL;
// echo '                    "addressRegion" : "Lombardia",'.PHP_EOL;
// echo '                    "addressCountry" : "Italia",'.PHP_EOL;
// echo '                    "postalCode" : "22138"'.PHP_EOL;
// echo '                },'.PHP_EOL;
echo '                "openingHoursSpecification" : {'.PHP_EOL;
echo '                    "@type" : "OpeningHoursSpecification",'.PHP_EOL;
echo '                    "opens" : "08:30",'.PHP_EOL;
echo '                    "closes" : "18:30"'.PHP_EOL;
echo '                },'.PHP_EOL;
echo '                "aggregateRating": {'.PHP_EOL;
echo '                      "@type": "AggregateRating",'.PHP_EOL;
echo '                      "ratingValue": "4.85",'.PHP_EOL;
echo '                      "reviewCount": "33"'.PHP_EOL;
echo '                }'.PHP_EOL;
echo '            }'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Organization",'.PHP_EOL;
echo '  "url": "https://www.coarbri.it",'.PHP_EOL;
echo '  "logo": "https://www.coarbri.it/sos-computer/assets/assistenza/sospc-logo.jpg",'.PHP_EOL;
echo '  "contactPoint": [{'.PHP_EOL;
echo '    "@type": "ContactPoint",'.PHP_EOL;
echo '    "telephone": "+39-347-4618-653",'.PHP_EOL;
echo '    "contactType": "customer service"'.PHP_EOL;
echo '  }]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;

echo '<script type="application/ld+json">'.PHP_EOL;
echo '{'.PHP_EOL;
echo '  "@context": "http://schema.org",'.PHP_EOL;
echo '  "@type": "Person",'.PHP_EOL;
echo '  "name": "coarbri",'.PHP_EOL;
echo '  "url": "http://www.coarbri.it",'.PHP_EOL;
echo '  "sameAs": ['.PHP_EOL;
echo '    "https://www.facebook.com/Assistenza-Pc-Smartphones-Tablets-278941075605985"'.PHP_EOL;
echo '  ]'.PHP_EOL;
echo '}'.PHP_EOL;
echo '</script>'.PHP_EOL;

// WebAgency
//echo '<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>'.PHP_EOL; 
echo '<link href="https://www.coarbri.it/web-agency/assets/css/noscript.css" type="text/css" rel="stylesheet" />'.PHP_EOL;

# echo '</script>'.PHP_EOL;

//echo '<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>'.PHP_EOL;

echo '</head>'.PHP_EOL; 
};


function sospcBodyBegin(){
    echo '  <body>'.PHP_EOL; 
    
};

function sospcBodyEnd(){
   
    echo '  </body>'.PHP_EOL; 
    echo '</html>'.PHP_EOL;  
};


?>
