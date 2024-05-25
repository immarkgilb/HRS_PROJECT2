<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Attendance extends Model
{
    use HasFactory;

    public function up()
{
    Schema::create('attendances', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employee_id');
        $table->foreign('employee_id')->references('id')->on('users'); // Assuming User table for employees
        $table->date('date');
        $table->time('time');
        $table->enum('status', ['present', 'late', 'absent']);
        $table->timestamps();
    });
}

}
