<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('users')->onDelete('cascade'); 

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('total')->nullable();
            $table->string('vacation_type')->nullable();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('vacations');
    }
};
