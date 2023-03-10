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
  Schema::create('tweet_user', function (Blueprint $table) {
    $table->id();
    // π½ γγγγθΏ½ε 
    $table->foreignId('tweet_id')->constrained()->cascadeOnDelete();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->unique(['tweet_id', 'user_id']);
    // πΌ γγγΎγ§θΏ½ε 
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
        Schema::dropIfExists('tweet_user');
    }
};
