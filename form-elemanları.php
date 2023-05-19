<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $cinsiyet = $_POST['cinsiyet'];

    echo "Adı: <b>" . $name . "</b><br>";
    echo "Soyadı: <b>" . $surname . "</b><br>";
    echo "Cinsiyeti: <b>" . $cinsiyet . "</b><br>";
    echo "E-mail: <b>" . $email . "</b><br>";
    echo "<p><a href='Hakkımda.html'>ANA SAYFAYA GİT</a></p>";
?>