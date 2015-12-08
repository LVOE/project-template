<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderToElementsTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::table(
            'elements',
            function (Blueprint $table) {
                $table->integer('order')->nullable()->after('unique');
            }
        );
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::table(
            'elements',
            function(Blueprint $table) {
                $table->dropColumn('order');
            }
        );
    }
}
