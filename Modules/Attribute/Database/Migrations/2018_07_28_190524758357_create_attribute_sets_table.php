<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('course_list', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('user_id');
            $table->string('course_title');
            $table->string('slag');
            $table->string('course_image');
            $table->string('course_intro');
            $table->string('course_discription');
            $table->timestamps();
        });

        Schema::create('exam_list', function (Blueprint $table) {
            $table->increments('exam_id');
            $table->string('course_id');
            $table->string('user_id');
            $table->string('exam_title');
            $table->string('exam_slag');
            $table->string('exam_image');
            $table->string('exam_intro');
            $table->string('exam_discription');
            $table->timestamps();
        });

        Schema::create('exam_quiz', function (Blueprint $table) {
            $table->increments('quiz_id');
            $table->string('course_id');
            $table->string('user_id');
            $table->string('exam_title');
            $table->string('exam_slag');
            $table->string('exam_image');
            $table->string('exam_intro');
            $table->string('exam_discription');
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
        Schema::dropIfExists('attribute_sets');
    }
}
