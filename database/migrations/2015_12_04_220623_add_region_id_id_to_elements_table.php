<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegionIdIdToElementsTable extends Migration
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
                $table->integer('region_id')->unsigned()->nullable()->after('id');
                $table->foreign('region_id', 'elements_region_id')->references('id')->on('regions')->onDelete('cascade');
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
                $table->dropForeign('elements_region_id');
                $table->dropColumn('region_id');
            }
        );
    }
}
