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
        Schema::create('merchants', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('description_uz');
            $table->text('description_ru');
            $table->text('description_en');
            $table->float('latitude', 10, 0);
            $table->float('longitude', 10, 0);
            $table->integer('book_commisison');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
};
