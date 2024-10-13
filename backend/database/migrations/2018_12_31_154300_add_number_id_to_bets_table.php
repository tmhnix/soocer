<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumberIdToBetsTable extends Migration {

    private $dbName = 'bets';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->string('number_id')->index()->nullable();
            $table->string('number_code')->nullable();
            $table->smallInteger('number_step')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('number_id');
            $table->dropColumn('number_step');
            $table->dropColumn('number_code');
        });
    }

}
