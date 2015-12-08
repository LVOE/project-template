<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'elements',
            function (Blueprint $table) {
                $table->increments('id');
                $table->enum('category', ['location', 'encounter', 'object']);
                $table->enum('type', ['custom', 'expected', 'none', 'special', 'random', 'complete']);
                $table->string('name');
                $table->boolean('unique');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elements');
    }
}
