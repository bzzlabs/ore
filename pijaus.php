<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\numeriukuSpintele.txt";
$failas = fopen($failoVieta, "w");

if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
    // Jei Pavyko, į failą įrašom kažkokią informaciją: 
    fwrite($failas, "Irasau i faila varda ir isvada\r\n");
    if($_POST['Vardas'] == "Lukas")
    {
        fwrite($failas,$_POST['Vardas']. "gavo i aki") 
    }
    fwrite($failas, $_POST['Vardas']."\r\n");
    
    fclose($failas);
}
echo $failoVieta."\r\n";
?>
<html>
<head>
    <title>numeriukai free</title>
    <meta charset="utf-8" />
</head>
<body>
    Numeriukas:
    <?=$_POST['Vardas'] ?>
    <br />
    <a href="numeriukuSpintele.txt">Numeriukai</a>
</body>
</html>