<?php 
$failovieta = $_SERVER['DOCUMENT_ROOT']."\\kebabai.txt";
/*$failas = fopen($failoVieta, "w");
//pasitikrinti:
if(failas === FALSE)
{
    echo "Nepavyko"
}
else 
{
    //Jei pavyko, irasyti kazokia informacija:
    fwrite($failas, "Irasau i faila varda ir atsakyma\r\n");
    fwrite($failas, $_POST['Romka']."\r\n");
    fwrite($failas, $_POST['teisingas']."\r\n");
    fclose($failas);
}*/
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
    














