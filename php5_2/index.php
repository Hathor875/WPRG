<?php

$mysqli = new mysqli("localhost", "root", "1234", "zad5_2DB");
$result = $mysqli->query("SELECT * FROM cars ORDER BY cena ASC LIMIT 5");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Strona Główna</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Samochody z najniższą ceną</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['marka']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['cena']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
