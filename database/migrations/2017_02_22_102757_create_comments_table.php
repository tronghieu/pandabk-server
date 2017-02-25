<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('issue_id')->unsigned();
            $table->text('content');
            $table->integer('actor_id')->nullable();
            $table->enum('type', ['COMMENT', 'ACTIVITY', 'LOG'])->default('COMMENT');
            $table->string('rel')->nullable();
            $table->timestamps();

            $table->foreign('issue_id')->references('id')->on('issues')->onDeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
