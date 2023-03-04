<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$firstName = "Janusz";
$lastName = "Nowak";
echo "Imie i nazwisko $firstName $lastName";

//heredoc
$data = <<< DATA
    <hr>
    Imię: $firstName <br>
    Nazwisko: $lastName <br>
DATA;

echo $data;

//nowdoc
echo <<< 'DATA'
    <hr>
    Imię: $firstName <br>
    Nazwisko: $lastName <br>
DATA;

$bin = 0b1010;
echo $bin;

$oct = 010;
echo $oct;

$hex = 0xA;
echo $hex;


?>
</body>
</html>