<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            //  array:6 [▼
            //      "_token" => "9PQO9CuTUcTWgTkyXme5MiNocrZLTH7zUiMFqC6e"
            //      "publish_date" => "2017-12-05",
            //      "article_image" => UploadedFile {#434 ▶}
            //      "is_published" => null
            // ]

            $table->increments('id');
            $table->integer('author_id');
            $table->string('is_published')->default('N');
            $table->text('title');
            $table->text('message');
            $table->timestamp('publish_date');
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
        Schema::dropIfExists('news');
    }
}
