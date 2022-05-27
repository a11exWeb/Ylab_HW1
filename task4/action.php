<?php

if (isset($_GET['name']) && isset($_GET['surname'])){

    $name = htmlspecialchars($_GET['name']);
    $surname = htmlspecialchars($_GET['surname']);

    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_base = 'people';
    $db_table = "users";

    try {

        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);

        $db->exec("set names utf8");

        $data = array( 'name' => $name, 'surname' => $surname );

        $query = $db->prepare("INSERT INTO $db_table (name, surname) values (:name, :surname)");

        $query->execute($data);

        $result = true;

        echo "Привет, $name $surname.";

        echo "<br>";

    } catch (PDOException $e) {

        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
}
?>

