<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTable extends Migration
{
    private $dbName = 'alerts';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->dbName, function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('msg')->nullable();
            $table->boolean('is_show')->default(true); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->dbName);
    }
}
