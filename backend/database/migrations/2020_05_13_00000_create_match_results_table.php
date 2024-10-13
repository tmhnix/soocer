<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchResultsTable extends Migration {

    private $table = 'match_results';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('match_date');
            $table->integer('ht_home_score');
            $table->integer('ht_away_score');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->boolean('is_delete');

            // Important
            $table->string('match_group_id')->unique();
            $table->integer('match_over_1h');
            $table->integer('match_over');

//            $table->integer('LeagueId');
            $table->integer('home_id');
            $table->integer('away_id');
//            $table->string('LeagueName');
            $table->string('away_team');
            $table->string('home_team');
//            $table->integer('MatchId');
//            $table->string('CreateTS');

            $table->boolean('hf_check')->default(false);
            $table->boolean('ft_check')->default(false);
            $table->boolean('refund_check')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists($this->table);
    }

}
