<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rate</title>
</head>

<body>
    <?php include './src/View/Template/Header.html' ?>
    <h1>Edit Rate</h1>
    <form method="post">
        <label for="rate">Rate</label>
        <input type="number" name="rate" id="rate" value="<?= $rate->getRate() ?>" required>
        <label for="comment">Comment</label>
        <input type="text" name="comment" id="comment" value="<?= $rate->getComment() ?>">
        <input type="submit" value="Edit">
    </form>
</body>

</html>