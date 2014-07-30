<?php

date_default_timezone_set('America/Los_Angeles');
require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__ .'/../config/config.php';


use Silex\Application;

$app = new Application();
$app['debug'] = true;
$app->get('/', function() use ($app) {
    return $app->json("You are here");
});

$app->get('/add_book', function() use ($app){
    $book = [
        'title' => "Title " . date('U'),
        'description' => "Fun"
    ];
    $book = \Foo\Models\Book::create($book);
    $author = [
        "Test " . date('U')
    ];
    $author = new \Foo\Models\Author($author);
    $author->books()->save($book);
    $name = $book->author()->name;
    return $app->json("Your book was made $book->title $name");
});

$app->get('/books', function() use ($app){
   $books = \Foo\Models\Book::all();
   $books = $books->toJson();
   return $app->json("Your books \n " . print_r($books, 1));
});

$app->get('/books/{id}', function($id) use ($app){
   $book = \Foo\Models\Book::findOrFail($id);
   $book = $book->first()->toJson();
   return $app->json("$book");
});


$app->run();