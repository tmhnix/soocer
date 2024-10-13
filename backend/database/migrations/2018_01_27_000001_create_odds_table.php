<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOddsTable extends Migration
{   
    private $table = 'odds';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('odd_id')->unique();
            $table->string('event_id')->index();
            $table->string('type')->nullable();
            $table->string('league_id');
            $table->smallInteger('corner_type')->default(0);
            $table->smallInteger('order')->default(0);
            $table->smallInteger('odd_status')->default(0);
            
            $table->json('ft_hdp')->nullable();
            $table->json('ft_ou')->nullable();
            $table->json('ft_1x2')->nullable();
            
            $table->json('hf_hdp')->nullable();
            $table->json('hf_ou')->nullable();
            $table->json('hf_1x2')->nullable();

            $table->boolean('hf_check')->default(false);
            $table->boolean('is_parlay')->default(false);
            $table->enum('status', ['inactive', 'active', 'done'])->default('active');
            $table->timestamps();

            $table->foreign('event_id')->references('event_id')->on('events')
                ->onUpdate('cascade')->onDelete('cascade');
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
