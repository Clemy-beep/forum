<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include './src/View/Template/Header.html' ?>
    <h1>Create Author</h1>
    <form method="Post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Add author">
    </form>
</body>
</html>