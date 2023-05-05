<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('emp_name');
            $table->string('emp_email')->unique();
            $table->bigInteger('emp_phone');
            $table->enum('emp_gender',['Male','Female']);
            $table->enum('emp_designation',['Project Manager','Developers','Designers','Data Entry Operator']);
            $table->float('emp_salary',8,2);
            $table->enum('status',['0','1'])->comment('0 = inactive, 1 = active');
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
        Schema::dropIfExists('employees');
    }
}
