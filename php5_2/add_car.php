<?php
$mysqli = new mysqli("localhost", "root", "1234", "zad5_2DB");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $stmt = $mysqli->prepare("INSERT INTO cars (marka, model, cena, rok, opis) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdis", $marka, $model, $cena, $rok, $opis);
    $stmt->execute();
    $stmt->close();

    header('Location: all_cars.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Samochód</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Dodaj Samochód</h1>
    <form method="POST">
        Marka: <input type="text" name="marka" required><br>
        Model: <input type="text" name="model" required><br>
        Cena: <input type="number" step="0.01" name="cena" required><br>
        Rok: <input type="number" name="rok" required><br>
        Opis: <textarea name="opis" required></textarea><br>
        <input type="submit" value="Dodaj">
    </form>
</body>
</html>
