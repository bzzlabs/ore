<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\numeriukuSpintele.txt";
$failas = fopen($failoVieta, "w");

if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
     
    fwrite($failas, "Irasau i faila varda ir atsakyma\r\n");
    fwrite($failas, $_POST['numeris']."\r\n");
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
    <a href="numeriukuSpintele.txt">Numeriukai</a>
</body>
</html>