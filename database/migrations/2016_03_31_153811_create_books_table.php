<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('year');
            $table->integer('branch_id')->unsigned();
            $table->string('author');
            $table->string('publication')->nullable();
            $table->integer('publication_year')->nullable();
            $table->integer('no_of_pages')->nullable();
            $table->enum('type',['notes','books']);
            $table->text('description')->nullable();
            $table->integer('price');
            $table->enum('need',['buy','sell']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
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
        Schema::drop('books');
    }
}
