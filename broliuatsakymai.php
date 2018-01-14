<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\vaisiai.txt";
//$failas = fopen($failoVieta, "r");
$lines = file($failoVieta);

foreach ($lines as $line_num => $line) {
    $pos = strpos($line, 'mandarinas');
    if ($pos === FALSE){
        echo "(".$line.") <br />\n"; 
    } 
    else{
        echo "(".'mandarinas'.") <br />\n";
    }
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
    
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
?>