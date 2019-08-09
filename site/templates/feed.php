<?php

$kirby->response()->type('txt');
$kirby->response()->type('application/rss+xml');

$options = [
    'title'       => 'Latest articles on oliverschwarz.info',
    'description' => 'Read the latest articles on agile organisations, boardgames, creating, running and software development.',
    'link'        => 'articles'
];

echo page('articles')->children()->visible()->flip()->limit(10)->feed($options);