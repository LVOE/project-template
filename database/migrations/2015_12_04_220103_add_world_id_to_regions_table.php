<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWorldIdToRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'regions',
            function (Blueprint $table) {
                $table->integer('world_id')->unsigned()->nullable()->after('id');
                $table->foreign('world_id', 'regions_world_id')->references('id')->on('worlds')->onDelete('cascade');
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
            'regions',
            function (Blueprint $table) {
                $table->dropForeign('regions_world_id');
                $table->dropColumn('world_id');
            }
        );
    }
}
