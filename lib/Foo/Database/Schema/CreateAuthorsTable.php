<?php

namespace Foo\Database\Schema;

use Illuminate\Database\Capsule\Manager as Capsule;

class CreateAuthorsTable {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Capsule::schema()->create('authors', function($table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Capsule::schema()->drop('authors');
    }
}