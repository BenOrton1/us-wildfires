<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Fires', function (Blueprint $table) {
            $table->index('NWCG_REPORTING_UNIT_NAME');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Fires', function (Blueprint $table) {
            $table->dropIndex(['NWCG_REPORTING_UNIT_NAME']);
        });
    }
};
