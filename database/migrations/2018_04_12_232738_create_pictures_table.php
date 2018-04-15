<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');

            $table->string("filename")->unique();
            $table->string("extension")->nullable();
            $table->string("mimetype")->nullable();
            $table->string("uri")->nullable();

            $table->text("title")->nullable();
            $table->text("caption")->nullable();
            $table->text("location")->nullable();

            $table->boolean("published")->default(FALSE);

            $table->integer("bleat_id")->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('bleat_id')->references('id')->on('bleats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
