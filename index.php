<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

// This is my HTML document.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='icon' href='img/fn.ico' type='image/x-icon' />
    <title>Fake News</title>
</head>

<body>
    <header>
        <h1>FAKE NEWS</h1>
    </header>
    <article>
        <?php foreach (sortByDate($articles) as $article) : ?>
            <div class="mx-auto" style="width: 320px;">
                <div class="container-fluid">
                    <div class="content">
                        <div class="text center">
                            <h2><?php echo $article['title']; ?></h2>
                            <img src="<?php echo $article['img']; ?>" class="img-fluid" alt="<?php echo $article['alt']; ?>">
                            <p><?php echo $article['content']; ?></p>
                            <em>Author: <?php echo getAuthorById($authors, $article['authors_id']); ?></em>
                            <br>
                            <time><?php echo $article['published_date']; ?></time>
                            <br>
                            <button style="font-size:18px"><i class="fa fa-thumbs-o-up"></i> <?php echo $article['like counter']; ?></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </article>

</body>

</html>