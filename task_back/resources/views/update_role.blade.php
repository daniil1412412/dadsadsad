
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="/update_role/role/87">
    @csrf
<select name="role">
    <option value="manager">manager</option>
    <option value="supervisor">supervisor</option>
    <option value="executor">executor</option>
</select>
<input type="submit" name="" id="">
    </form>
</body>
</html>