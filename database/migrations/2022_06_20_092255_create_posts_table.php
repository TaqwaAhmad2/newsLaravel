<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->text('desc');
            $table->string('post_image')->nullable();
//            $table->string('small_image')->nullable();
//            $table->integer('views')->default(0);
//            $table->integer('shares')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
//            $table->unsignedBigInteger('user_id')->nullable();

            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');;

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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

};
