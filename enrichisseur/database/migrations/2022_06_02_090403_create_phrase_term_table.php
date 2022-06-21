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
        Schema::create('phrase_term', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->primary(['phrase_id', 'terms_id']);
            
            $table->unsignedBigInteger('phrase_id');
            $table->foreign('phrase_id')->references('id')->on('phrases');

            $table->unsignedBigInteger('terms_id');
            $table->foreign('terms_id')->references('id')->on('terms');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phrase_term');
        Schema::enableForeignKeyConstraints();
    }
};
