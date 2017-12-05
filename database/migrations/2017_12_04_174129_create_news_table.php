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
            //      "title" => array:3 [▼
            //          "nl" => null
            //          "fr'" => null
            //          "en" => null
            //      ]
            //      "categories" => array:3 [▼
            //          "nl" => null
            //          "fr" => null
            //          "en" => null
            //      ]
            //      "message" => array:3 [▼
            //          "nl" => null
            //          "fr" => null
            //          "en" => null
            //      ]
            // ]

            $table->increments('id');
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
