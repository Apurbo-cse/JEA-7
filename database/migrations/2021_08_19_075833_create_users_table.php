<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('cell')->nullable();
            $table->string('telephone')->nullable();

            $table->string('facelink')->nullable();
            $table->string('linlink')->nullable();

            $table->string('description')->nullable();
            $table->string('image')->nullable();

            $table->string('course_name')->nullable();
            $table->string('course_subject')->nullable();
            $table->string('course_quali')->nullable();

            $table->string('job_type')->nullable();
            $table->string('job_digination')->nullable();
            $table->string('job_work')->nullable();

            $table->string('intsub')->nullable();
            $table->string('intname')->nullable();

            $table->string('dipsub')->nullable();
            $table->string('dipname')->nullable();

            $table->string('bscdipsub')->nullable();
            $table->string('bscdipname')->nullable();

            $table->string('bscsub')->nullable();
            $table->string('bscname')->nullable();

            $table->string('mscsub')->nullable();
            $table->string('mscname')->nullable();

            $table->string('mbasub')->nullable();
            $table->string('mbaname')->nullable();

            $table->string('fathername')->nullable();
            $table->string('mothername')->nullable();

            $table->string('preadd')->nullable();
            $table->string('peradd')->nullable();

            $table->string('nid')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood')->nullable(); 


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
        Schema::dropIfExists('users');
    }
}
