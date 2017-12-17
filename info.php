<?php 
$failas = fopen("/Rezzultatai.csv", "w");
if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
    fwrite($failas, "Irasau i faila varda ir atsakyma\r\n");
    fwrite($failas, $_POST['vardas']."\r\n");
    fwrite($failas, $_POST['atsakymas']."\r\n");
    fclose($failas);
}
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
</body>
</html>