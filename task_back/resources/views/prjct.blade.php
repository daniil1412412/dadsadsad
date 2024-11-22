<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action='/project'>
        @csrf
        <input type="text" name="name">
        <input type="text" name="project_desc">
        <input type="date" name="start_date">
        <input type="date" name="end_date">
        <input type="text" name="status" id="">
        <input type="text" name="remainder" id="">
        <input type="submit">
    </form>
</body>
</html>