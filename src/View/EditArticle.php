<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include './src/View/Template/Header.html';
    ?>
    <h1>Edit article</h1>
    <form method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $article->getTitle() ?>"><br>
        <label for="resume">Content</label>
        <textarea name="resume" id="resume" cols="30" rows="10"><?= $article->getResume() ?></textarea><br>
        <input type="submit" value="Modify">
    </form>
</body>

</html>