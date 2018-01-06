<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\Dilanas.txt";
$failas = fopen($failoVieta, "w");
if($failas === FALSE)
{
    echo "Nepavyko Atidaryti Failo";
}
else
{
// Jei Pavyko, į failą įrašom kažkokią informaciją: 
fwrite($failas, "Irasau i faila varda ir atsakyma\r\n");
fwrite($failas, $_POST['Vardas']."\r\n");
fwrite($failas, $_POST['Numeriukas']."\r\n");
fclose($failas);
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