<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\numeriukuSpintele.txt";
$failas = fopen($failoVieta, "w");

if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
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
    <?=$_POST['numeris'] ?>
    <br />
    <a href="numeriukuSpintele.txt">Numeriukai</a>
</body>
</html>