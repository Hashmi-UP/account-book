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
        Schema::create('pkrconverter', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('sender_phone');
            $table->string('reciever_name');
            $table->string('reciever_phone');
            $table->string('city');
            $table->float('pkr_amount',13, 4);
            $table->float('credit_amount',13, 4);
            $table->float('pkr_rate',13, 4);
            $table->float('service_charge',13, 4);
            $table->float('net_amount',13, 4);
            $table->float('amount',13, 4);
            $table->float('aed_convert_total',13, 4);
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
        Schema::dropIfExists('pkrconverter');
    }
};
