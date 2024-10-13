<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimeToEventsTable extends Migration {

    private $dbName = 'events';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->timestamp('new_score_at')->index()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('haft_time_at')->index()->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('new_score_at');
            $table->dropColumn('haft_time_at');
        });
    }

}
