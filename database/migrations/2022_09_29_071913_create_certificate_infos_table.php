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
        Schema::create('certificate_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('refarence_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('dob');
            $table->string('nid');
            $table->string('ssc_exam');
            $table->string('ssc_board');
            $table->string('ssc_year');
            $table->string('ssc_group'); 
            $table->string('ssc_roll');
            $table->string('ssc_registrationNo');
            $table->string('ssc_gpaaditional');
            $table->string('ssc_gpa');
            $table->string('hsc_exam');
            $table->string('hsc_board');
            $table->string('hsc_year');
            $table->string('hsc_group');
            $table->string('hsc_roll');
            $table->string('hsc_registrationNo');
            $table->string('hsc_gpaaditional');
            $table->string('hsc_gpa');
            $table->rememberToken();
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
        Schema::dropIfExists('certificate_infos');
    }
};
