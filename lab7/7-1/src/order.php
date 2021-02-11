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
    <h2>
        Ваше замовлення прийнято
    </h2>
    <ul>
        <li>Замовлено виріб - <?php echo htmlspecialchars($_POST['Виріб']); ?></li>
        <li>Матеріал - <?php echo htmlspecialchars($_POST['Матеріал']); ?></li>
        <li>Кількість – <?php echo (int)$_POST['Кількість']; ?></li>
    </ul>
</body>
</html>
