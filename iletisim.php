<?php


    echo $_POST['isim'];
    echo "<br>";
    echo $_POST['soyisim'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
    
    

    if($_POST["ziyaret"] == "evet")
    {
        echo("ZİYARET ETTİM.");
    }
    else if ($_POST["ziyaret"] == "hayir")
    {
        echo("ZİYARET ETMEDİM.");
    }
    echo "<br>";
    echo "ZİYARET ETTİĞİM/ETMEK İSTEDİĞİM YERLER:";
    if(isset($_POST['bodrum'])) echo "bodrum"."\n";
    if(isset($_POST['dalaman'])) echo "dalaman"."\n";
    if(isset($_POST['datca'])) echo "datca"."\n";
    if(isset($_POST['fethiye'])) echo "fethiye"."\n";
    if(isset($_POST['kavaklidere'])) echo "kavaklidere"."\n";
    if(isset($_POST['marmaris'])) echo "marmaris"."\n";
    if(isset($_POST['mentese'])) echo "mentese"."\n";
    if(isset($_POST['milas'])) echo "milas"."\n";
    if(isset($_POST['ortaca'])) echo "ortaca"."\n";
    if(isset($_POST['seydikemer'])) echo "seydikemer"."\n";
    if(isset($_POST['ula'])) echo "ula"."\n";
    if(isset($_POST['yatagan'])) echo "yatagan"."\n";
    echo "<br>";

    $country = $_POST['plajlar'];
    echo "EN SEVDİĞİM/MERAK ETTİĞİM PLAJ ".$country;
    
    echo "<br>";

    $selectOption = $_POST['araclar'];

    echo $selectOption." TERCİH EDERİM.";
    
    
                      






?>