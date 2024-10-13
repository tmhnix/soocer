<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStartDateAndIsManualToEventsTable extends Migration {

    private $dbName = 'events';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->timestamp('start_date')->index()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('is_manual')->default(false);
        });

        Schema::table('odds', function(Blueprint $table) {
            $table->boolean('is_manual')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('odds', function(Blueprint $table) {
            $table->dropColumn('is_manual');
        });

        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('is_manual');
        });
    }

}
