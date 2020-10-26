<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fake News</title>
</head>

<body>
    <?php foreach (sortByDate($articles) as $article) : ?>
        <h2><?php echo $article['title']; ?></h2>
        <br>
        <p><?php echo $article['content']; ?></p>
        <em>Author: <?php echo getAuthorById($authors, $article['authors_id']); ?></em>
        <br>
        <time><?php echo $article['published_date']; ?></time>
        <br>
        <button><?php echo $article['like counter']; ?></button>
    <?php endforeach; ?>

</body>

</html>