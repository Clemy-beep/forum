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
    <h1>Rate Article</h1>
    <form method="post">
        <label for="rate">Rate</label>
        <input type="number" name="rate" id="rate" required max=5 min=0>
        <label for="comment">Comment</label>
        <input type="text" name="comment" id="comment">
        <label for="usermail">User email</label>
        <input type="email" name="usermail" id="usermail" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" required>
        <input type="submit" value="Rate !">
    </form>
</body>

</html>