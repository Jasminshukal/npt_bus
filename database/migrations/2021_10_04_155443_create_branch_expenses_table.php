<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('expanse_date')->unique();
            $table->string('branch_name')->nullable();
            $table->decimal('booking',8,2)->nullable();
            $table->string('no_seat')->nullable();
            $table->decimal('parsl',8,2)->nullable();
            $table->string('no_parsl')->nullable();
            $table->decimal('office_expanse',8,2)->nullable();
            $table->string('extra_income')->nullable();
            $table->string('remark')->nullable();
            $table->unsignedBigInteger('branches_id');
            $table->foreign('branches_id')->references('id')->on('branches')->onDelete('cascade');
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
        Schema::dropIfExists('branch_expenses');
    }
}
