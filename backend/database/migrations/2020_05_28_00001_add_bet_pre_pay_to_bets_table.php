<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBetPrePayToBetsTable extends Migration {

    private $dbName = 'bets';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->decimal('bet_pre_pay', 15, 2)->default(0);
        });

        $sql = "UPDATE $this->dbName SET bet_pre_pay = bet_amount;";
        //add filtering conditions if you don't want ALL records updated
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('bet_pre_pay');
        });
    }

}
