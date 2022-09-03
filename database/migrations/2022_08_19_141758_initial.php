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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('gender');
            //$table->foreign('gender')->references('id')->on('genders')->onDelete('cascade');
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->unsignedBigInteger('department_id');
            //$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->datetime('date_of_birth');
            $table->datetime('start_of_employment');
            $table->datetime('end_of_employment')->nullable();
            $table->integer('experience');
            $table->integer('age');
            $table->string('cv')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();
        });

        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('gender');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->datetime('date_of_birth');
            $table->integer('age');
            $table->string('city');
            $table->json('appointments')->nullable();
            $table->decimal('total_spending')->nullable();
            $table->string('picture')->nullable();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total_staff');
            $table->timestamps();
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('total_staff');
            $table->unsignedBigInteger('head')->nullable();
            //$table->foreign('head')->references('id')->on('employees');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('beds');
            $table->integer('width');
            $table->integer('length');
            $table->integer('condition');
            $table->boolean('is_vacant');
            $table->unsignedBigInteger('current_patient')->nullable();
            //$table->foreign('current_patient')->references('id')->on('patients');
            $table->unsignedBigInteger('staff')->nullable();
            //$table->foreign('staff')->references('id')->on('employees');
            $table->timestamps();
        });

        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->date('date_time');
            $table->unsignedBigInteger('cleaning_staff')->nullable();
            //$table->foreign('cleaning_staff')->references('id')->on('employees');
            $table->unsignedBigInteger('nurse_1')->nullable();
            //$table->foreign('nurse_1')->references('id')->on('employees');
            $table->unsignedBigInteger('nurse_2')->nullable();
            //$table->foreign('nurse_2')->references('id')->on('employees');
            $table->timestamps();
        });

        Schema::create('hospitalizations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('patient')->nullable();
            //$table->foreign('patient')->references('id')->on('patients');
            $table->unsignedBigInteger('department')->nullable();
            //$table->foreign('department')->references('id')->on('departments');
            $table->unsignedBigInteger('bill')->nullable();
            //$table->foreign('bill')->references('id')->on('cash_in');
            $table->timestamps();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_time');
            $table->integer('expected_minutes');
            $table->integer('duration_minutes')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('doctor')->nullable();
            //$table->foreign('doctor')->references('id')->on('employees');
            $table->unsignedBigInteger('patient')->nullable();
            //$table->foreign('patient')->references('id')->on('patients');
            $table->unsignedBigInteger('department')->nullable();
            //$table->foreign('department')->references('id')->on('departments');
            $table->unsignedBigInteger('bill')->nullable();
            //$table->foreign('bill')->references('id')->on('cash_in');
            $table->timestamps();
        });

        Schema::create('cashin', function (Blueprint $table) {
            $table->id();
            $table->date('date_time');
            $table->string('category');
            // $table->enum('category', ['appointment, hospitalization']);
            $table->unsignedBigInteger('appointment_id')->nullable();
            //$table->foreign('appointment_id')->references('id')->on('appointments');
            $table->unsignedBigInteger('hospitalization_id')->nullable();
            //$table->foreign('hospitalization_id')->references('id')->on('hospitalizations');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('currentstock', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->enum('product_category', ['pharmaceuticals', 'equipments', 'office_supplies', 'others']);
            $table->unsignedBigInteger('product_details')->nullable();
            //$table->foreign('product_details')->references('id')->on('products');
            $table->integer('quantities');
            $table->string('unit');
            $table->boolean('near_expiration')->nullable();
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->string('manufacturer');
            $table->decimal('average_price');
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->unsignedBigInteger('sender_id')->nullable();
            //$table->foreign('current_patient')->references('id')->on('patients');
            $table->dateTime('date_time');
            $table->string('title');
            $table->string('content');
           
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
        //
    }
};
