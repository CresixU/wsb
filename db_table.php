<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <h4>Użytkownicy</h4>
    <table>
        <tr>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Miasto</th>
            <th>Wojewodztwo</th>
            <th>Państwo</th>
        </tr>
        <?php
        require_once("./scripts/connect.php");
        $sql = "SELECT firstName AS `Imie`, lastName, birthday, city, state, country FROM `users` INNER JOIN `cities` ON `cities`.`id` = `users`.`city_id` INNER JOIN `states` ON `states`.`id` = `cities`.`state_id` INNER JOIN `countries` ON `states`.`country_id` = `countries`.`id`;";
        $result = $conn->query($sql);

        while($user = $result->fetch_assoc()) {
            echo <<< TABLEUSERS
                <tr>
                    <td>$user[Imie]</td>
                    <td>$user[lastName]</td>
                    <td>$user[birthday]</td>
                    <td>$user[city]</td>
                    <td>$user[state]</td>
                    <td>$user[country]</td>
                </tr>
TABLEUSERS;
        }

    ?>
    </table>
</body>
</html>