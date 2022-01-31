<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>

<body>
    <?php include "./src/View/Template/Header.html" ?>
    <h1>New Article</h1>
    <form method="POST">
        <label for="isbn">ISBN</label><br>
        <input type="number" name="isbn" id="isbn"><br>
        <label for="title">Title</label><br>
        <input type="text" name="title" id="title" required><br>
        <label for="resume">Resume</label><br>
        <textarea name="resume" id="resume" cols="30" rows="10"></textarea><br>
        <label for="author_mail">Author Mail</label><br>
        <input type="text" name="author_mail" id="author_mail"><br>
        <label for="author_fname">Author firstname</label><br>
        <input type="text" name="author_fname" id="author_fname" required><br>
        <label for="author_lname">Author lastname</label><br>
        <input type="text" name="author_lname" id="author_lname" required><br>
        <label for="editor">Editor name</label><br>
        <input type="text" name="editor" id="editor" required> <br>
        <label for="editor_mail">Editor email</label><br>
        <input type="email" name="editor_mail" , id="editor_mail" required> <br>
        <input type="submit" value="Submit article">
    </form>
</body>

</html>