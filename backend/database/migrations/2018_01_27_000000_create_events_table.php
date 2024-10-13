<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{   
    private $table = 'events';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('event_id')->unique();
            $table->string('parent_id')->index();
            $table->string('league_id');
            $table->integer('order')->default(0);
            $table->string('league_name');
            $table->string('type')->nullable();
            $table->smallInteger('time_status')->default(0);
            $table->smallInteger('time_position')->default(0);
            $table->string('time')->nullable();
            $table->string('start_time')->nullable();
            $table->string('ss')->nullable();
            $table->string('hf_ss')->nullable();
            $table->string('home')->nullable();
            $table->string('away')->nullable();
            $table->json('extra')->nullable();
            $table->json('timer')->nullable();
            $table->json('reds')->nullable();
            $table->boolean('hf_check')->default(false);
            $table->boolean('can_finish')->default(false);
            $table->boolean('has_new_score')->default(false);
            $table->enum('status', ['inactive', 'active', 'done'])->default('active'); //
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
