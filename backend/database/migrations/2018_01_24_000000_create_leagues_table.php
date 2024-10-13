<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{   
    private $table = 'leagues';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('league_id')->unique();
            $table->string('name');
            $table->string('cc')->nullable();
            $table->integer('order')->default(0);
            $table->integer('order_upcoming')->default(0);
            $table->enum('status', ['inactive', 'active'])->default('active'); //
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
        Schema::dropIfExists($this->table);
    }
}
