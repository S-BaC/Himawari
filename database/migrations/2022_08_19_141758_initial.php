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
            $table->integer('gender');
            $table->string('email')->unique()->nullable();
            $table->string('phone');
            $table->float('department_id');
            //$table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->float('role_id');
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->datetime('date_of_birth');
            $table->datetime('start_of_employment');
            $table->datetime('end_of_employment')->nullable();
            $table->integer('experience');
            $table->integer('age');
            $table->datetime('cv')->nullable();
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
            $table->json('appointments');
            $table->decimal('total_spending')->nullable();
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
            $table->float('head')->nullable();
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
            $table->float('current_patient')->nullable();
            //$table->foreign('current_patient')->references('id')->on('patients');
            $table->float('staff')->nullable();
            //$table->foreign('staff')->references('id')->on('employees');
            $table->timestamps();
        });

        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->date('date_time');
            $table->float('cleaning_staff')->nullable();
            //$table->foreign('cleaning_staff')->references('id')->on('employees');
            $table->float('nurse_1')->nullable();
            //$table->foreign('nurse_1')->references('id')->on('employees');
            $table->float('nurse_2')->nullable();
            //$table->foreign('nurse_2')->references('id')->on('employees');
            $table->timestamps();
        });

        Schema::create('hospitalizations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->float('patient')->nullable();
            //$table->foreign('patient')->references('id')->on('patients');
            $table->float('department')->nullable();
            //$table->foreign('department')->references('id')->on('departments');
            $table->float('bill')->nullable();
            //$table->foreign('bill')->references('id')->on('cash_in');
            $table->timestamps();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date_time');
            $table->integer('expected_minutes');
            $table->integer('duration_minutes')->nullable();
            $table->string('description')->nullable();
            $table->float('doctor')->nullable();
            //$table->foreign('doctor')->references('id')->on('employees');
            $table->float('patient')->nullable();
            //$table->foreign('patient')->references('id')->on('patients');
            $table->float('department')->nullable();
            //$table->foreign('department')->references('id')->on('departments');
            $table->float('bill')->nullable();
            //$table->foreign('bill')->references('id')->on('cash_in');
            $table->timestamps();
        });

        Schema::create('cash_in', function (Blueprint $table) {
            $table->id();
            $table->date('date_time');
            $table->enum('category', ['appointment, hospitalization']);
            $table->float('appointment_id')->nullable();
            //$table->foreign('appointment_id')->references('id')->on('appointments');
            $table->float('hospitalization_id')->nullable();
            //$table->foreign('hospitalization_id')->references('id')->on('hospitalizations');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('current_stock', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->enum('product_category', ['pharmaceuticals', 'equipments', 'office_supplies', 'others']);
            $table->float('product_details')->nullable();
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
            $table->string('average_price');
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
