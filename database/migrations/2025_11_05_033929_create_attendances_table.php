<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->date('attendance_date')->nullable();
            $table->foreignId('employee_id')->constrained('users')->onDelete('cascade'); 
            $table->string('attendance_type')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
