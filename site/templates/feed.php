<?php

/**
 * https://github.com/bnomei/kirby3-feed
 */

$kirby->response()->type('txt');
$kirby->response()->type('application/rss+xml');

$options = [
    'title'       => 'oliverschwarz.info Feed',
    'description' => 'Read the latest articles on agile organisations, boardgames, creating, running and software development.',
    'link'        => 'articles'
];

echo page('articles')->children()->listed()->flip()->limit(10)->feed($options);