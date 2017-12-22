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
          $table->string('title');
          $table->text('description');
          $table->date('from');
          $table->date('to')->nullable();
          $table->text('skills');
          $table->string('github_link')->nullable();
          $table->string('website_link')->nullable();
          $table->boolean('status')->default(0);
          $table->string('category');
          $table->string('featured_image')->nullable();
          $table->text('images')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
