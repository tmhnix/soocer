<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentToBetsTable extends Migration {

    private $dbName = 'bets';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->integer('agent_id')->index()->default(0);
            $table->integer('master_id')->index()->default(0);
            $table->integer('super_id')->index()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('agent_id');
            $table->dropColumn('master_id');
            $table->dropColumn('super_id');
        });
    }

}
