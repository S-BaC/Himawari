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

        Schema::table('appointments', function ($table) {
            $table->foreign('doctor')->references('id')->on('employees');
            $table->foreign('patient')->references('id')->on('patients');
            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('bill')->references('id')->on('cashin');
        });

        Schema::table('rooms', function ($table) {
            $table->foreign('current_patient')->references('id')->on('patients');
            $table->foreign('staff')->references('id')->on('employees');
        });

        Schema::table('assignments', function ($table) {
            $table->foreign('cleaning_staff')->references('id')->on('employees');
            $table->foreign('nurse_1')->references('id')->on('employees');
            $table->foreign('nurse_2')->references('id')->on('employees');
        });

        Schema::table('hospitalizations', function ($table) {
            $table->foreign('patient')->references('id')->on('patients');
            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('bill')->references('id')->on('cashin');
        });


        Schema::table('cashin', function ($table) {
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->foreign('hospitalization_id')->references('id')->on('hospitalizations');
        });

        Schema::table('currentstock', function ($table) {
            $table->foreign('product_details')->references('id')->on('products');
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
