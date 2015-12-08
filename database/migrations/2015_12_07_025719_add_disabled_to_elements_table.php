<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisabledToElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'elements',
            function (Blueprint $table) {
                $table->boolean('disabled')->default(false)->after('order');
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
        Schema::table(
            'elements',
            function (Blueprint $table) {
                $table->dropColumn('disabled');
            }
        );
    }
}
