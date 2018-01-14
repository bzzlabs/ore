<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\vaisiai.txt";
//$failas = fopen($failoVieta, "r");
$lines = file_get_contents($failoVieta);
//echo $lines;
$lines2 = explode("\r\n", $lines);
//echo $lines2;
/* foreach ($lines as $line_num => $line) {
     $pos = strpos($line, 'apelsinas');
     if ($pos === FALSE){

    } 
    else{
       echo $line."<br />\n";
    }
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
  */  
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
?>