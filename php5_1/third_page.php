<?php
session_start();
if (!isset($_SESSION['card_number'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trzecia Podstrona</title>
</head>
<body>
<h1>Podsumowanie</h1>
Nr karty: <?php echo htmlspecialchars($_SESSION['card_number']); ?><br>
Dane zamawiającego: <?php echo htmlspecialchars($_SESSION['order_data']); ?><br>
Ilość osób: <?php echo htmlspecialchars($_SESSION['people_count']); ?><br>
<?php for ($i = 1; $i <= $_SESSION['people_count']; $i++): ?>
    Dane osoby <?php echo $i; ?>: <?php echo htmlspecialchars($_SESSION['person_' . $i]); ?><br>
<?php endfor; ?>
</body>
</html>
