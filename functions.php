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

// This function connects id in author array with id in articles array, and then returns author name from authors array.

function sortByDate(array $articles): array
{
    usort($articles, function ($a, $b) {
        return $b['published_date'] <=> $a['published_date'];
    });
    return $articles;
}
// This function sorts published date from latest to last.