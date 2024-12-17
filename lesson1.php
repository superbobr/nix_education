<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 1</title>
</head>
<body>
<table>
    <?php

    echo '<table style="border-collapse: collapse; text-align: left;">';

    for ($row = 1; $row <= 10; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 5; $col++) {
            $num = $col + ($row - 1) * 5;
            if ($num <= 10) { // Проверяем, чтобы не выйти за пределы таблицы 10x10
                echo '<td style="border: 3px double black; padding: 10px;">';
                for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
                    echo "$num x $multiplier = " . ($num * $multiplier) . '<br>';
                }
                echo '</td>';
            }
        }
        echo '</tr>';
    }

    echo '</table>';

    ?>
</table>
<br>
<a href="index.php">Повернутись на Головну сторінку</a>
</body>
</html>

