<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staffs', function(Blueprint $table)
        {
            $table->increments('s_id');
            $table->String('s_name');
            $table->String('s_number');
            $table->String('s_phone');
            $table->String('s_email');
            $table->String('s_address');
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
