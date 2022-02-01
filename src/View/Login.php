<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php include './src/View/Template/UnloggedHeader.php'; ?>
    <h1>Login</h1>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Sign in">
    </form>
</body>

</html>