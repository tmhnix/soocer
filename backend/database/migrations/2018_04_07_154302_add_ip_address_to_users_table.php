<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIpAddressToUsersTable extends Migration {

    private $dbName = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->ipAddress('last_ip_login')->nullable();
            $table->timestamp('last_time_login')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('last_time_bet')->default(\DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table($this->dbName, function(Blueprint $table) {
            $table->dropColumn('last_ip_login');
            $table->dropColumn('last_time_login');
            $table->dropColumn('last_time_bet');
        });
    }

}
