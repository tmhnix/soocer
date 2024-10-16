<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnlineToUsersTable extends Migration {

    private $dbName = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->boolean('online')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('online');
        });
    }

}
