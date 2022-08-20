<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Bluleeprint;
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
        Schema::table('employees', function ($table) {
            $table->index('department_id')->unsigned(); 
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

        Schema::table('departments', function ($table) {
            $table->index('head')->unsigned(); 
            $table->foreign('head')->references('id')->on('employees');
        });

    //     Schema::table('rooms', function ($table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->integer('beds');
    //         $table->integer('width');
    //         $table->integer('length');
    //         $table->integer('condition');
    //         $table->boolean('is_vacant');
    //         $table->integer('current_patient')->nullable();
    //         $table->foreign('current_patient')->references('id')->on('patients');
    //         $table->integer('staff')->nullable();
    //         $table->foreign('staff')->references('id')->on('employees');
    //         $table->timestamps();
    //     });

    //     Schema::table('assignments', function ($table) {
    //         $table->id();
    //         $table->date('date_time');
    //         $table->integer('cleaning_staff')->nullable();
    //         $table->foreign('cleaning_staff')->references('id')->on('employees');
    //         $table->integer('nurse_1')->nullable();
    //         $table->foreign('nurse_1')->references('id')->on('employees');
    //         $table->integer('nurse_2')->nullable();
    //         $table->foreign('nurse_2')->references('id')->on('employees');
    //         $table->timestamps();
    //     });

    //     Schema::table('hospitalizations', function ($table) {
    //         $table->id();
    //         $table->date('start_date');
    //         $table->date('end_date')->nullable();
    //         $table->integer('patient')->nullable();
    //         $table->foreign('patient')->references('id')->on('patients');
    //         $table->integer('department')->nullable();
    //         $table->foreign('department')->references('id')->on('departments');
    //         $table->integer('bill')->nullable();
    //         $table->foreign('bill')->references('id')->on('cash_in');
    //         $table->timestamps();
    //     });

    //     Schema::table('appointments', function ($table) {
    //         $table->id();
    //         $table->date('date_time');
    //         $table->integer('expected_minutes');
    //         $table->integer('duration_minutes')->nullable();
    //         $table->string('description')->nullable();
    //         $table->integer('doctor')->nullable();
    //         $table->foreign('doctor')->references('id')->on('employees');
    //         $table->integer('patient')->nullable();
    //         $table->foreign('patient')->references('id')->on('patients');
    //         $table->integer('department')->nullable();
    //         $table->foreign('department')->references('id')->on('departments');
    //         $table->integer('bill')->nullable();
    //         $table->foreign('bill')->references('id')->on('cash_in');
    //         $table->timestamps();
    //     });

    //     Schema::table('cash_in', function ($table) {
    //         $table->id();
    //         $table->date('date_time');
    //         $table->enum('category', ['appointment, hospitalization']);
    //         $table->integer('appointment_id')->nullable();
    //         $table->foreign('appointment_id')->references('id')->on('appointments');
    //         $table->integer('hospitalization_id')->nullable();
    //         $table->foreign('hospitalization_id')->references('id')->on('hospitalizations');
    //         $table->integer('amount');
    //         $table->timestamps();
    //     });

    //     Schema::table('current_stock', function ($table) {
    //         $table->id();
    //         $table->string('product_name');
    //         $table->enum('product_category', ['pharmaceuticals', 'equipments', 'office_supplies', 'others']);
    //         $table->integer('product_details')->nullable();
    //         $table->foreign('product_details')->references('id')->on('products');
    //         $table->integer('quantities');
    //         $table->string('unit');
    //         $table->boolean('near_expiration')->nullable();
    //         $table->timestamps();
    //     });

    //     Schema::table('products', function ($table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->string('details');
    //         $table->string('manufacturer');
    //         $table->string('average_price');
    //         $table->timestamps();
    //     });
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
