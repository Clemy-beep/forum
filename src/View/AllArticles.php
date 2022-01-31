<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./src/View/Template/Header.html"; ?>
    <h1>ALl articles</h1>
    <?php
    if (!empty($articles)) {
        foreach ($articles as $key => $article) {
            $title = $article->getTitle();
            $content = $article->getResume();
            $id = $article->getId();
            echo "<h2>$title</h2>";
            echo "<p>$content</p>";
            echo "<a href='http://127.0.0.6/modify-article/$id'>Edit Article</a>";
            echo "<a href='http://127.0.0.6/delete-article/$id'> Delete Article</a><br>";
            echo "<a href='http://127.0.0.6/rate-article/$id'>Delete Rate</a>";
            echo "<a href='http://127.0.0.6/rate-article/$id'> Rate Article</a><br>";
        }
    } else echo "no articles";
    ?>

</body>

</html>