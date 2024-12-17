<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 3</title>
</head>
<body>
<form>
    <input name="text" type="text">
    <button type="submit">Відправити</button>
</form>
<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    $reversed = mb_strrev($text);
    echo $reversed;
}

function mb_strrev($str) {
    $r = '';
    for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
?>

<br>
<a href="index.php">Повернутись на Головну сторінку</a>
</body>
</html>

