<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\vaisiai.txt";
//$failas = fopen($failoVieta, "r");
//$lines = file($failoVieta);
$VisasFailas = file_get_contents('http://donatasa.azurewebsites.net/vaisiai.txt');
$lines = explode(" ", $VisasFailas);

foreach ($lines as $line_num => $line) {
    $pos = strpos($line, 'mandarinas');
    if ($pos === FALSE){
     echo $line ."! /<br / >" ; 
    } 
    else{
        echo $line . "<br />\n";
    }
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
    
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
?>