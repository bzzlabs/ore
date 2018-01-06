<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\Dilanas.txt";
$failas = fopen($failoVieta, "a");
$vardas = $_POST['Vardas'];
if($failas === FALSE)
{
    echo "Nepavyko Atidaryti Failo";
}
else
{
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
fwrite($failas, "Vardas ir Numeris,");
fwrite($failas, $vardas.",");
fwrite($failas, $_POST['Numeriukas']."\r\n");
fclose($failas);
}
if($vardas == "Romka")
{
    // teisingai
    header('Location: pijus.html');    
}
else
{  
header('Location: dilanas.html');    
}

echo $failoVieta;
?>
<html>
<head>
 <tile>Labas</title>
 <meta charset="utf-8" />
</head>
<body>
    Vardas:
<a href="/Dilanas.txt">Rezultatai</a>

</body>
</html>