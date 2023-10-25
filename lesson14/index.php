<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Повестка</title>
</head>
<body>
    <form method="POST" action="http://localhost/handler.php">
        <label> Имя
            <input type="text" name="name" placeholder="Имя">
        </label>
        <label> Фамилия
            <input type="text" name="surname" placeholder="Фамилия">
        </label>
        <label> Рост
            <input type="number" name="height" placeholder="Рост">
        </label>
        <label> Вес
            <input type="number" name="weight" placeholder="Вес">
        </label>
        <label> Дата рождения
            <input type="date" name="date" placeholder="Дата рождения">
        </label>
        <button type="submit">Отправить<button>
    </form>
</body>
</html>