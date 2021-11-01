<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('expanse_date');
            $table->string('name');
            $table->string('routes');
            $table->string('start_km');
            $table->decimal('amount',8,2);
            $table->enum('operation',['Cr','Dr'])->default('Dr');
            $table->string('remark');
            $table->unsignedBigInteger('bus_id');
            $table->foreign('bus_id')->references('id')->on('buses')->onDelete('cascade');
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
        Schema::dropIfExists('bus_expenses');
    }
}
