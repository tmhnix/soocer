<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{   
    private $table = 'bets';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->string('odd_id')->nullable()->index();
            $table->string('event_id')->nullable()->index();
            $table->decimal('total_profit', 15, 2)->default(0);
            $table->decimal('bet_commission', 15, 2)->default(0);
            $table->decimal('bet_amount', 15, 2);
            $table->decimal('bet_profit', 15, 2)->default(0);
            $table->boolean('has_full')->default(true); // 1/2 or 1
            $table->decimal('bet_value', 15, 2)->default(0);

            $table->bigInteger('group_id')->nullable()->unsigned();
            $table->enum('bet_kind', ['normal', 'group', 'item'])->default('normal'); //
            $table->enum('odd_type', ['malay', 'decimal', 'hong_kong'])->default('malay'); //
            $table->smallInteger('time_status')->default(0); // 0 not ready, 1: runing
            $table->smallInteger('time_position')->default(0); // 0 not ready, 1: runing
            $table->smallInteger('bet_position')->default(0); // 0 home, 1 away, 2 draw
            $table->string('bet_type')->default('group'); //
            $table->json('odd')->nullable();
            $table->string('time')->nullable();
            $table->string('ss')->nullable();
            $table->string('last_ss')->nullable();
            $table->json('reds')->nullable();
            $table->enum('status', ['pending', 'runing', 'cancel', 'done'])->default('pending'); //
            $table->enum('bet_status', ['won', 'lose', 'draw', 'refund'])->default('draw'); //
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on($this->table);

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('odd_id')->references('odd_id')->on('odds');
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
