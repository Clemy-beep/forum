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
    <h1>All rates for article n°<?= $id ?></h1>
    <<?php
        if (!empty($rates)) {
            foreach ($rates as $key => $rate) {
                $article = $rate->getArticle();
                $articleId= $article->getId();
                $rateId = $rate->getId();
                if ($rate->getArticle()->getId() == $id) {
                    $rated = $rate->getRate();
                    $author = $rate->getAuthor()->getUsername();
                    $comment = $rate->getComment();
                    echo "$rated out of 5 <br>";
                    if ($comment !== null) echo "$comment <br>";
                    echo "Author : $author";
                    echo "<a href='http://127.0.0.6/delete-rate/$rateId'>Delete rate</a>";
                }
            }
        } else echo "No rates for this article";
        ?> </body>

</html>