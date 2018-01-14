<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\vaisiai.txt";
//$failas = fopen($failoVieta, "r");
$lines = file_get_contents($failoVieta);
//echo $lines;
$lines2 = explode("\r\n", $lines);
//var_dump($lines2);

foreach ($lines2 as $line_num => $line) {
     $pos = strpos($line, 'apelsinas');
     if ($pos === FALSE){

    } 
    else{
       echo 'Teisingas Atsakymas Apelsinas'."<br />\n";
    }
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
  
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
?>