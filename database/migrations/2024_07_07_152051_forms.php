<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('fname');
            $table->String('lname');
            $table->String('email');
            $table->String('phone');
            $table->String('address');
            $table->String('city');
            $table->String('state');
            $table->String('zip');
            $table->String('country');
            $table->String('message');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};