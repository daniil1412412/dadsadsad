<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action='/employees'>
        @csrf
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="role">
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>