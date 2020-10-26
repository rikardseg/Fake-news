<?php

declare(strict_types=1);

function getAuthorById(array $authors, int $articlesId): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $articlesId) {
            return $author['name'];
        }
    }
}
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.