<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumberGamesTable extends Migration
{
    private $dbName = 'number_games';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->dbName, function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('event_id');
            $table->string('code');
            $table->string('name')->nullable();
            $table->string('type');
            $table->integer('last_ball')->default(0);
            $table->json('ball_numbers')->nullable();
            $table->integer('step')->default(0);
            $table->json('data')->nullable();
            $table->timestamp('date')->nullable();
            $table->enum('status', ['runing', 'closed'])->default('runing'); //
            $table->boolean('is_check')->default(false); //
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
