<?php
$jsonFile = __DIR__ . '/books_strong.json';
$studentName = "Корявко Матвей";
if (!file_exists($jsonFile)) {
    die("Файл books_strong.json не найден!!!");
}
$books = json_decode(file_get_contents($jsonFile), true);
if ($books === null) {
    die("ошибка при чтение JSON: " . json_last_error_msg());
}
if(!isset($_GET['id'])) {
    die("Не указан ID КНИГИ!");
}
$bookId = (int)$_GET['id'];
$book = null;
foreach ($books as $b) {
    if ($b['id'] === $bookId) {
        $book = $b;
        break;
    }
}
if($book === null) {
    die("Книга с ID $bookId не найдена!!!");
} else {
    $bookName = $book['name'];
    $bookAuthor = $book['author'];
    $bookYear = $book['year'];
    $bookDescription = $book ['description'];
}
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $bookName; ?> — Детальная страница</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            text-align: center;
            flex-shrink: 0;
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 20px auto 0 auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<header>
    <h2>Книжный каталог</h2>
    <p>Студент: <?php echo $studentName; ?></p>
</header>

<main>
    <h1><?php echo $bookName ?></h1>
    <p><strong>Автор:</strong> <?php echo $bookAuthor; ?></p>
    <p><strong>Год издания:</strong> <?php echo $bookYear; ?></p>
    <p><?php echo $bookDescription ?></p>
</main>

<footer>
    <p>Лабороторная работа №10 - <?php echo $studentName ?></p>
</footer>
</body>
</html>

