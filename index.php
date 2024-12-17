<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простий PHP сайт</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 0.5rem 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1rem;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            padding: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Вітаю на моєму PHP сайті!</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="lesson1.php">Урок 1</a>
    <a href="lesson2.php">Урок 2</a>
    <a href="lesson3.php">Урок 3</a>
</nav>

<main>
    <?php
    echo "<p>Hello, NIX Education</p>";
    ?>
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Простий PHP сайт. Всі права захищені.</p>
</footer>
</body>
</html>

