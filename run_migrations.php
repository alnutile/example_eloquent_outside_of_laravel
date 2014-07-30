<?php

use Foo\Database\Schema\CreateAuthorsTable;
use Foo\Database\Schema\CreateBooksTable;
use Illuminate\Container\Container;
use Illuminate\Database\ConnectionResolver;
use Illuminate\Database\Connectors\ConnectionFactory;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config/config.php';

$path = __DIR__.'/database/db.sqlite';

$authors = new CreateAuthorsTable();
$authors->up();
$books = new CreateBooksTable();
$books->up();