<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    echo "Adı: <b>" . $name . "</b><br>";
    echo "Soyadı: <b>" . $surname . "</b><br>";
    echo "Cinsiyeti: <b>" . $gender . "</b><br>";
    echo "E-mail: <b>" . $email . "</b><br>";
    echo "<p><a href='index.html'>ANA SAYFAYA GİT</a></p>";
?>