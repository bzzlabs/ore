<?php 
$failovieta = $_SERVER['DOCUMENT_ROOT']."\kebabai.txt";
$failas = fopen($failovieta, "w");
//pasitikrinti:
if($failas === FALSE)
{
    echo "Nepavyko";
}
else 
{
    //Jei pavyko, irasyti kazokia informacija:
    fwrite($failas, "Irasau i faila varda ir atsakyma,");
    fwrite($failas, $_POST['Romka'].",");
    fwrite($failas, $_POST['teisingas'].",");
    fclose($failas);
}
// Atspausdinam kur ant serverio yra failas:
echo $failovieta;
?>
<html>
<head>
    <title>Bendras darbas</title>
    <meta charset="utf-8" />
</head>
<body>
    vardas:
    <?php
    $vardas = $_POST['Romka']; //$_GET['Romka'];
    if($vardas == "Romka")
    {
        echo "Labas Romka";
    }
    else
    {
        echo "Labas" . $vardas;
    }
    ?>
    <br />
    atsakymas
    <?=$_POST['teisingas'] ?>
<br/>
<a href="/kebabai.txt">Parsisiusti rezultatu faila</a>
</body>
</html>
    














