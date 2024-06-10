<?php
session_start();
if (!isset($_SESSION['people_count'])) {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 1; $i <= $_SESSION['people_count']; $i++) {
        $_SESSION['person_' . $i] = $_POST['person_' . $i];
    }
    header('Location: third_page.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Druga Podstrona</title>
</head>
<body>
    <form method="POST">
        <?php for ($i = 1; $i <= $_SESSION['people_count']; $i++): ?>
            Dane osoby <?php echo $i; ?>: <input type="text" name="person_<?php echo $i; ?>" required><br>
        <?php endfor; ?>
        <input type="submit" value="Zapisz i dalej">
    </form>
</body>
</html>
