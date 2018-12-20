<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMostTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects',function(Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->text('description');
      $table->timestamp('end_date');
      $table->tinyInteger('f2f_budget')->default('0');
      $table->tinyInteger('inmediacy')->default('0');
      $table->unsignedInteger('address_id')->nullable();
      $table->unsignedInteger('user_id');
      $table->timestamps();
      });


      Schema::create('types',function(Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->string('icon');
      $table->timestamps();
      });

      Schema::create('subtypes',function(Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->timestamps();
      });

      Schema::create('addresses',function(Blueprint $table){
      $table->increments('id');
      $table->string('name');
      $table->string('street')->nullable();
      $table->string('street_number')->nullable();
      $table->string('floor')->nullable();
      $table->string('house')->nullable();
      $table->string('house_number')->nullable();
      $table->string('estate')->nullable();
      $table->string('province')->nullable();
      $table->string('country')->nullable();
      $table->timestamps();
      });

      Schema::create('image_project',function(Blueprint $table){
      $table->increments('id');
      $table->string('image');
      $table->unsignedInteger('project_id');
      $table->timestamps();
      });

      Schema::create('available_dates',function(Blueprint $table){
      $table->increments('id');
      $table->timestamp('date');
      $table->time('time_from');
      $table->time('time_to');
      $table->unsignedInteger('project_id');
      $table->timestamps();
      });

      Schema::create('project_type',function(Blueprint $table){
      $table->increments('id');
      $table->unsignedInteger('project_id');
      $table->unsignedInteger('type_id');
      $table->timestamps();
      });

      Schema::create('project_subtype',function(Blueprint $table){
      $table->increments('id');
      $table->unsignedInteger('project_id');
      $table->unsignedInteger('subtype_id');
      $table->timestamps();
      });

      Schema::create('subtype_type',function(Blueprint $table){
      $table->increments('id');
      $table->unsignedInteger('subtype_id');
      $table->unsignedInteger('type_id');
      $table->timestamps();
      });

      Schema::table('projects',function(Blueprint $table){
        $table->foreign('address_id')->references('id')->on('addresses');
        $table->foreign('user_id')->references('id')->on('users');
      });

      Schema::table('image_project',function(Blueprint $table){
        $table->foreign('project_id')->references('id')->on('projects');
      });

      Schema::table('available_dates',function(Blueprint $table){
        $table->foreign('project_id')->references('id')->on('projects');
      });

      Schema::table('project_type',function(Blueprint $table){
        $table->foreign('project_id')->references('id')->on('projects');
        $table->foreign('type_id')->references('id')->on('types');
      });

      Schema::table('project_subtype',function(Blueprint $table){
        $table->foreign('project_id')->references('id')->on('projects');
        $table->foreign('subtype_id')->references('id')->on('subtypes');
      });

      Schema::table('subtype_type',function(Blueprint $table){
        $table->foreign('subtype_id')->references('id')->on('subtypes');
        $table->foreign('type_id')->references('id')->on('types');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('projects',function(Blueprint $table){
      $table->dropForeign('projects_address_id_foreign');
      $table->dropForeign('projects_user_id_foreign');
      });

      Schema::table('image_project',function(Blueprint $table){
      $table->dropForeign('image_project_project_id_foreign');
      });

      Schema::table('available_dates',function(Blueprint $table){
      $table->dropForeign('available_dates_project_id_foreign');
      });

      Schema::table('project_type',function(Blueprint $table){
      $table->dropForeign('project_type_project_id_foreign');
      $table->dropForeign('project_type_type_id_foreign');
      });

      Schema::table('project_subtype',function(Blueprint $table){
      $table->dropForeign('project_subtype_project_id_foreign');
      $table->dropForeign('project_subtype_subtype_id_foreign');
      });

      Schema::table('subtype_type',function(Blueprint $table){
      $table->dropForeign('subtype_type_type_id_foreign');
      $table->dropForeign('subtype_type_subtype_id_foreign');
      });

      Schema::dropIfExists('types');
      Schema::dropIfExists('subtypes');
      Schema::dropIfExists('projects');
      Schema::dropIfExists('addresses');
      Schema::dropIfExists('image_project');
      Schema::dropIfExists('available_dates');
      Schema::dropIfExists('project_type');
      Schema::dropIfExists('project_subtype');
      Schema::dropIfExists('subtype_type');
    }
}
