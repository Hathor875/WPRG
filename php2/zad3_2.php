<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <style>
        /* Style for the reservation form */
        body {
            background-color: #f9f9f9;
            padding-bottom: 20px;
        }

        #form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin-top: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div id="form-container">
    <h1>Additional Guests Information</h1>
    <?php
    if (!isset($_POST['submit'])) {
        $num_people = intval($_POST['num_people']);
        for ($i = 2; $i <= $num_people; $i++) {
            echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
            echo "<label for='additional_name_$i'>Name:</label>";
            echo "<input type='text' name='additional_name_$i' id='additional_name_$i' required><br><br>";
            echo "<label for='additional_surname_$i'>Surname:</label>";
            echo "<input type='text' name='additional_surname_$i' id='additional_surname_$i' required><br><br>";
            echo "<input type='hidden' name='num_people' value='$num_people'>";
            echo "<input type='submit' name='submit' value='Submit'>";
            echo "</form>";
        }
    }
    ?>
</div>
</body>
</html>
