<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .red {
        color: red;
    }
    .green {
        color: green;
    }
    .yellow {
        color: yellow;
    }
    .blue {
        color: blue;
    }

    .black {
        color: black;
    }
</style>
<body>
<table>
    <?php

    function colorForNumber($num) {
        switch ($num) {
            case 1:
                return '<span class="red">1</span>';
            case 2:
                return '<span class="green">2</span>';
            case 3:
                return '<span class="yellow">3</span>';
            case 4:
                return '<span class="blue">4</span>';
            default:
                return "<span class=\"black\">$num</span>";
        }
    }

    echo '<table style="border-collapse: collapse; text-align: left;">';

    for ($row = 1; $row <= 10; $row++) {
        echo '<tr>';
        for ($col = 1; $col <= 5; $col++) {
            $num = $col + ($row - 1) * 5;
            if ($num <= 10) { // Проверяем, чтобы не выйти за пределы таблицы 10x10
                echo '<td style="border: 3px double black; padding: 10px;">';
                for ($multiplier = 1; $multiplier <= 10; $multiplier++) {
                    $colorNum = colorForNumber($num);
                    $colorNumMul = colorForNumber($multiplier);
                    $temp = (string)($num * $multiplier);
                    $result = strlen($temp) < 2 ? colorForNumber($temp) : colorForNumber($temp[0]) . colorForNumber($temp[1]);
                    if (strlen($temp) === 3) {
                        $result = colorForNumber($temp[0]) . colorForNumber($temp[1]) . colorForNumber($temp[2]);
                    }
                    echo "$colorNum x $colorNumMul = " . $result . '<br>';
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






