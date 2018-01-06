<?php
$failoVieta = $_SERVER['DOCUMENT_ROOT']."\\Naujieji.txt";
$failas = fopen($failoVieta, "w");
$vardas = $_POST['Vardas'];

if($failas === FALSE)
{
    echo "Nepavyko atidaryti failo rašymui";
}
else
{
    // Jei Pavyko, į failą įrašom kažkokią informaciją: 
        fwrite($failas, "Tokie buvo nauji\r\n");
        if($_POST['Vardas'] == "Lukas")
        {
            fwrite($failas, $_POST['Vardas']." gavo i aki"."\r\n");
            echo $_POST['Vardas']." gavo i aki"."\r\n"  ;
        }

        if($_POST['Vardas'] == "Dilanas")
        {
            echo $_POST['Vardas']." atsidure policijoj"."\r\n"
            fwrite($failas, $_POST['Vardas']." atsidure policijoj"."\r\n");
        }

        if($_POST['Vardas'] == "Romka")
        {
            echo $_POST['Vardas']." tusino mieste"."\r\n"
            fwrite($failas, $_POST['Vardas']." tusino mieste"."\r\n");
        }

        if($_POST['Vardas'] == "Rokas")
        {
            echo $_POST['Vardas']." svente su savo panele"."\r\n"
            fwrite($failas, $_POST['Vardas']." svente su savo panele"."\r\n");
        }

        if($_POST['Vardas'] == "Donatas")
        {
            echo $_POST['Vardas']." - jo keliai nezinomi..."."\r\n"
            fwrite($failas, $_POST['Vardas']."  - jo keliai nezinomi..."."\r\n");
        }
        else
        {
            echo "nepaviko";
        }
    
    //fwrite($failas, $_POST['Vardas']."\r\n");
    
    fclose($failas);
}
echo $failoVieta."\r\n";
?>
<html>
<head>
    <title>kokie buvo nauji? </title>
    <meta charset="utf-8" />
</head>
<body>
    Vardas:
    <?=$_POST['Vardas'] ?>
    <br />
    <a href="Naujieji.txt">Nauji</a>
</body>
</html>