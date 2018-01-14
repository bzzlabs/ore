<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\vaisiai.txt";
//$failas = fopen($failoVieta, "r");
$lines = file($failoVieta);
echo $failoVieta;
foreach ($lines as $line_num => $line) {

    if ($line == "apelsinas"){
        echo $line."<br />\n"; 
    } 
    else{
        echo "(".$line.") <br />\n";
    }
    //echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
    
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
?>