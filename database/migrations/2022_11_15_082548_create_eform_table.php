<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eform', function (Blueprint $table) {
            $table->id('e_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('qualification')->nullable();
            $table->string('gender')->nullable();
            $table->longText('letter', 4000000000)->nullable();
            $table->longText('availability', 4000000000)->nullable();
            $table->longText('assessment', 4000000000)->nullable();
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
        Schema::dropIfExists('eform');
    }
};
