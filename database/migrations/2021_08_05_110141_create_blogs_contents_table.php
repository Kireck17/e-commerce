<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_step_id')->nullable();
            $table->foreign('blog_step_id')
                  ->references('id')
                  ->on('blogs_steps')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->longText("content");
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
        Schema::dropIfExists('blogs_contents');
    }
}
