<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\Dilanas.txt";
$lines = file($failoVieta);
foreach ($lines as $line_num => $line)
{
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
// $failas = fopen($failoVieta, "r");
// if($failas === FALSE)
// {
 //   echo "Nepavyko Atidaryti Failo";
//}
//else
//{
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
// Sitoj vietoj skaito faila po viena eilute
// Jeigu eiluteje yra zodis kazkoksai Karina ta eilute atspauzdinti toliau nuo krasto tarp " "
// Jeigu neteisingas isversti i  ( )
//fclose($failas);
//}
?>