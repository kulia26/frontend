<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Замовлення меблів</h1>
    <form action="/order.php" method="post">
        <select name="Виріб" id="item" required>
            <option value="Шафа">Шафа</option>
            <option value="Стіл">Стіл</option>
            <option value="Сервант">Сервант</option>
        </select>

        <select name="Матеріал" id="item" required>
            <option value="Шафа">дуб</option>
            <option value="Стіл">горіх</option>
            <option value="Сервант">бук</option>
        </select>

        <label for="quantity">
            <input id="quantity" required name="Кількість" type="number">
        </label>

        <input type="submit" value="Замовити">
    </form>
</body>
</html>
