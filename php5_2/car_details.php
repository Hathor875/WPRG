<?php
$mysqli = new mysqli("localhost", "root", "1234", "zad5_2DB");
$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM cars WHERE id = $id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Szczegóły Samochodu</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Szczegóły Samochodu</h1>
    <p>ID: <?php echo $row['id']; ?></p>
    <p>Marka: <?php echo $row['marka']; ?></p>
    <p>Model: <?php echo $row['model']; ?></p>
    <p>Cena: <?php echo $row['cena']; ?></p>
    <p>Rok: <?php echo $row['rok']; ?></p>
    <p>Opis: <?php echo $row['opis']; ?></p>

    <a href="index.php">Powrót do strony głównej</a>
</body>
</html>
