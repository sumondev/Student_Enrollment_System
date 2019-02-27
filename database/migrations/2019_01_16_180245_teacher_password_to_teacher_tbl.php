<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeacherPasswordToTeacherTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teacher_tbl', function (Blueprint $table) {
            //new table add in teacher_tbl
             $table->string('teacher_password');
        });
    }


    public function down()
    {
        Schema::dropIfExists('teacher_tbl');
    }



}

