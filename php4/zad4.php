
<?php
//                         aby sprawdzić program lokalnie dodać 127.0.0.1 do listy adresów!!!!!!!!!!
$ipFile = 'adresy_ip.txt';
$currentIP = $_SERVER['REMOTE_ADDR'];

if (file_exists($ipFile)) {
    $allowedIPs = file($ipFile, FILE_IGNORE_NEW_LINES);
    if (in_array($currentIP, $allowedIPs)) {
        echo '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona dla autoryzowanych</title>
    <style>
        body {
            background-color: green;
            color: white;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Dostęp!</h1>
</body>
</html>';
    } else {
        echo '<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brak dostępu!</title>
    <style>
        body {
            background-color: red;
            color: white;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>
    <h1>Brak dostępu!</h1>
</body>
</html>';
    }
}

