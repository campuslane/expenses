<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id');
            $table->date('date');
            $table->datetime('time_start');
            $table->datetime('time_end');
            $table->string('travel_from');
            $table->string('travel_to');
            $table->integer('mileage');
            $table->decimal('airfare', 5, 2);
            $table->decimal('car_rental', 5, 2);
            $table->decimal('car_rental_gasoline', 5, 2);
            $table->decimal('lodging', 5, 2);
            $table->decimal('lodging_tax', 5, 2);
            $table->decimal('airport_parking', 5, 2);
            $table->decimal('other_expense', 5, 2);
            $table->text('other_expense_description');
            $table->text('expense_notes');
            $table->timestamps();
            $table->softDeletes();

            $table->index('report_id');
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('expenses');
    }
}
