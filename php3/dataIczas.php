<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

<form action="" method="post">
    <label>
        <input type="date" name="date" placeholder="Wprowadź datę" required>
    </label>
    <button type="submit">Oblicz</button>
</form>

<?php
setlocale(LC_ALL,'pl_PL.UTF-8');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_date = $_POST['date'];
    $user_day = strftime('%A', strtotime($user_date));

    function getAge($birthdate) {
        $today = new DateTime('today');
        $diff = $today->diff(new DateTime($birthdate));
        return $diff->y;
    }

    function daysUntilNextBirthday($birthdate) {
        $today = new DateTime('today');
        $nextBirthday = new DateTime(date('Y-m-d', strtotime($birthdate)));
        $nextBirthday->modify('+' . ((int)date('Y') - (int)date('Y', strtotime($birthdate))) . ' years');
        if ($nextBirthday < $today) {
            $nextBirthday->modify('+1 year');
        }
        $diff = $today->diff($nextBirthday);
        return $diff->days;
    }

    function getDayOfWeek($date) {
        return strftime('%A', strtotime($date));
    }

    $age = getAge($user_date);
    $daysUntilNextBirthday = daysUntilNextBirthday($user_date);

    echo "<p>Urodziłeś/aś się w: " . getDayOfWeek($user_date) . ".</p>";
    echo "<p>Ukończyłeś/aś $age lat.</p>";
    echo "<p>Do Twoich następnych urodzin pozostało $daysUntilNextBirthday dni.</p>";
}
?>

</body>
</html>
