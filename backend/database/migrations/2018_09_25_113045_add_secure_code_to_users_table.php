<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSecureCodeToUsersTable extends Migration
{
    private $dbName = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->string('secure_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('secure_code');
        });
    }
}
