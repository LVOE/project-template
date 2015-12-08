<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProgressPointsToRegionsTable extends Migration
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
                $table->string('progress_points')->after('name')->default('');
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
                $table->dropColumn('progress_points');
            }
        );
    }
}
