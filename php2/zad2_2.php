<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Summary</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2, h3 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Reservation Summary</h1>
<h2>Main Guest Information:</h2>
<p>Name: <?php echo $_POST['name']; ?></p>
<p>Surname: <?php echo $_POST['surname']; ?></p>
<p>Address: <?php echo $_POST['address']; ?></p>
<p>Credit Card: <?php echo $_POST['credit_card']; ?></p>
<p>Email: <?php echo $_POST['email']; ?></p>
<p>Arrival Date: <?php echo $_POST['arrival_date']; ?></p>
<p>Arrival Time: <?php echo $_POST['arrival_time']; ?></p>
<p>Child Bed Needed: <?php echo isset($_POST['child_bed']) ? 'Yes' : 'No'; ?></p>
<p>Amenities: <?php echo isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'None'; ?></p>

<?php
$num_people = intval($_POST['num_people']);
if ($num_people > 1) {
    echo "<h2>Additional Guests Information:</h2>";
    for ($i = 2; $i <= $num_people; $i++) {
        echo "<h3>Guest $i:</h3>";
        echo "<p>Name: <input type='text' name='additional_name[]' required></p>";
        echo "<p>Surname: <input type='text' name='additional_surname[]' required></p>";
    }
}
?>
</body>
</html>
