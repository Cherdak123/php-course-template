<?php
$studentName = "Корявко Матвей";
$books = [
    [
        "id" => 11,
        "name" => "Дон Кихот",
        "author" => "Мигель де Сервантес",
        "year" => 1605

    ],
    [
        "id" => 12,
        "name" => "Война и мир",
        "author" => "Лев Толстой",
        "year" => 1869
    ],
    [
        "id" => 13,
        "name" => "1984",
        "author" => "Джордж Оруэлл",
        "year" => 1949
    ]
]
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная страница каталога</title>
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
            margin: 20px;          /* теперь отступы со всех сторон, без авто-центрирования */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-top: 0;
        }

        h2 {
            margin-bottom: 5px;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 15px 0;
        }
    </style>
</head>
<body>
<header>
    <h2>Книжный каталог</h2>
</header>

<main>
    <h1>Список книг</h1>
    <?php foreach ($books as $book): ?>
        <h2>
            <a href="book_detail.php?id=<?php echo $book['id']; ?><?php echo $book['name']; ?></a>
        </h2>
        <p><strong>Автор:</strong><?php echo $book['author'] ?></p>
        <p><strong>Год издания:</strong><?php echo $book['year'] ?></p>
    <?php endforeach; ?>
</main>

<footer>
    <p>Лабороторная работа №10 - <?php echo $studentName; ?></p>
</footer>
</body>
</html>

