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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_package');
            $table->foreign('id_package')->references('id')->on('packages')->onDelete('cascade');
            $table->date('date');
            $table->integer('quantity');
            $table->integer('total_payment');
            $table->enum('status',['Unpaid','Paid']);
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->unique();
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
        Schema::dropIfExists('booking');
    }
};
