<?php 
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\Rezzultatai.txt";
$failas = fopen($failoVieta, "w");
// pasitikrinam ar pavyko atidaryti failą rašymui:
if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
    // Jei Pavyko, į failą įrašom kažkokią informaciją: 
    fwrite($failas, "Irasau i faila varda ir atsakyma\r\n");
    fwrite($failas, $_POST['vardas']."\r\n");
    fwrite($failas, $_POST['atsakymas']."\r\n");
    fclose($failas);
}
// atspausdinam kur ant serverio yra failas:
echo $failoVieta;
?>
<html>
<head>
    <title>Bendras darbas</title>
    <meta charset="utf-8" />
</head>
<body>
    Vardas: 
<?php 
$vardas = $_POST['vardas']; //$_GET['vardas'];
if($vardas == "Donatas")
{
    echo "Labas Donatai";
}
else
{
    echo "Labas " . $vardas;
}
?>
<br />
Atsakymas
<?=$_POST['atsakymas'] ?>
<br/>
matosi
<a href="/Rezzultatai.txt">Parsisiusti rezultatu faila</a>
</body>
</html>