<?php
session_start();
if (!isset($_SESSION['page_loaded'])) {
    $visit_count = 1;
    if (isset($_COOKIE['visit_count'])) {
        $visit_count = $_COOKIE['visit_count'] + 1;
    }
    setcookie('visit_count', $visit_count, time() + 3600 * 24 * 30);
    $_SESSION['page_loaded'] = true;
} else {
    $visit_count = $_COOKIE['visit_count'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Counter</title>
</head>
<body>
<?php if ($visit_count >= 10): ?>
    <p>Odwiedziłeś tę stronę <?php echo $visit_count; ?> razy.</p>
<?php else: ?>
    <p>Odwiedziłeś tę stronę mniej niż 10 razy.</p>
<?php endif; ?>
</body>
</html>
