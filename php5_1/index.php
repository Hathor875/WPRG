<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['people_count'] < 0) {
        echo "Ilość osób nie może być ujemna.";
    } else {
        $_SESSION['card_number'] = $_POST['card_number'];
        $_SESSION['order_data'] = $_POST['order_data'];
        $_SESSION['people_count'] = $_POST['people_count'];
        header('Location: second_page.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pierwsza Podstrona</title>
</head>
<body>
<form method="POST">
    Nr karty: <input type="text" name="card_number" required><br>
    Dane zamawiającego: <input type="text" name="order_data" required><br>
    Ilość osób: <input type="number" name="people_count" required min="0"><br>
    <input type="submit" value="Dalej">
</form>
</body>
</html>

