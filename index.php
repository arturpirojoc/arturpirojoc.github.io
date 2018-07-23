<?php
$a = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
$countrycode= $a['geoplugin_countryCode'];
if ($countrycode=='MD')
    header( 'Location: https://www.google.com' ) ;
else 
    header( 'Location: https://www.stayathomemama.de/my-lifestyle/6-foods-to-give-your-mans-libido-a-lift/' ) ;

?>



// <?php
// require_once 'IP2Location.php';
 
// $loc = new IP2Location('databases/IP-COUNTRY.BIN', IP2Location::FILE_IO);
// $record = $loc->lookup($_SERVER['REMOTE_ADDR'], IP2Location::ALL);
 
// if($record == 'GR') {
//     header('HTTP/1.1 301 Moved Permanently');
//     header('Location: http://test.com');
//     exit;
// }
// if($record == 'MD') {
//     header('HTTP/1.1 301 Moved Permanently');
//     header('Location: http://test1.com');
//     exit;
// }
// ?>