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