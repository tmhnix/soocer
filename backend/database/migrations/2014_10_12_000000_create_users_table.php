<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{   
    private $table = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('username')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('home_mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('group')->nullable();
            $table->string('parents')->nullable();
            $table->integer('parent_id')->unsigned();
            $table->enum('status', ['suspended', 'block', 'active'])->default('active'); //
            $table->enum('user_type', ['admin', 'super', 'master', 'agent', 'member', 'sub'])->default('member'); //
            $table->string('password');
            $table->string('token')->nullable();

            $table->decimal('wallet', 20, 2)->default(0);
            $table->decimal('credit_line', 20, 2)->default(0);

            $table->decimal('discountAsian', 15, 8)->default(0);
            $table->decimal('discount1x2', 15, 8)->default(0);
            $table->decimal('discountCS', 15, 8)->default(0);
            $table->decimal('discountNumber', 15, 8)->default(0);
            $table->decimal('discountHRFixOdds', 15, 8)->default(0);

            $table->integer('bongdamin')->default(0)->unsigned();
            $table->integer('bongdamax')->default(0)->unsigned();
            $table->integer('bongdaper')->default(0)->unsigned();

            $table->integer('bongromin')->default(0)->unsigned();
            $table->integer('bongromax')->default(0)->unsigned();
            $table->integer('bongroper')->default(0)->unsigned();
            
            $table->integer('bauducmin')->default(0)->unsigned();
            $table->integer('bauducmax')->default(0)->unsigned();
            $table->integer('bauducper')->default(0)->unsigned();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on($this->table)
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
