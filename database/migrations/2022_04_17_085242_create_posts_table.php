<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->foreignId('room_id');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('price');
            $table->text('ukuranKamar');
            $table->text('jumlahKasur');
            $table->text('kamarMandi');
            $table->text('wifi');
            $table->text('ac');
            $table->text('hiburan');
            $table->text('body');
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
