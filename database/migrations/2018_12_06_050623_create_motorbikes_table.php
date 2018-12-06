<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorbikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model', 250);
            $table->string('color', 250);
            $table->string('weight', 250);
            $table->string('img_path', 250)->nullable();
            $table->decimal('price', 12,0);
            $table->integer('admin_id');
            $table->string('published_at', 250)->nullable();
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
        Schema::dropIfExists('motorbikes');
    }
}
