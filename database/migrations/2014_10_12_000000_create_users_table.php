<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('first_name',20)->nullable();
            $table->string('last_name',20)->nullable();
            $table->string('current_zone',20)->nullable();
            $table->integer('user_type')->default(0);
            $table->bigInteger('mobile')->unique()->nullable();
            $table->enum('blood', array('A+', 'A-', 'B+', 'B-', 'O+','O-','AB+', 'AB-'))->nullable();
            $table->string('occupation')->nullable();
            $table->enum('gender', array('Male', 'Female', 'Other'))->nullable();
            $table->timestamp('dob')->nullable();
            $table->enum('marital_status', array('Single', 'Married', 'Divorced'))->nullable();
            $table->string('image')->nullable();
            $table->string('designation',50)->nullable();
            $table->string('height',20)->nullable();
            $table->string('weight',20)->nullable();
            $table->string('body_color',20)->nullable();
            $table->dateTime('last_given_blood')->default('2000-01-01');
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
