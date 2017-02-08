<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 250)->unique();
          $table->string('slug', 200)->nullable()->default(null)->unique();
          $table->date('date')->nullable()->default(null);
          $table->string('date_alt', 200)->nullable()->default(null);
          $table->string('short_description', 200)->nullable()->default(null);
          $table->string('description', 5000)->nullable()->default(null);
          $table->string('git', 200)->nullable()->default(null);
          $table->string('urls', 1000)->nullable()->default(null);
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
        Schema::drop('projects');
    }
}
