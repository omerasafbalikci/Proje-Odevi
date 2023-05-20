<?php
    $kullanici = $_POST['kullanici'];
    $sifre = $_POST['sifre'];
    if(isset($kullanici, $sifre) && ($kullanici!='') && ($sifre==substr($kullanici, 0, 10)))
    {
        echo "Giriş Başarılı. Hoşgeldiniz&nbsp;&nbsp;";
        echo "<b>" . $kullanici . '&nbsp;&nbsp;&nbsp;' . $sifre . "</b>";
        echo "<p> <a href='index.html'>ANA SAYFAYA GİT</a></p>";
    }
    else
    {
        echo "Bilgilerinizi kontrol edip tekrar giriş yapınız.<br>";
        echo "<p> <a href='login.html'>LOGİN SAYFASINA DÖN</a></p>";
    }
?>
