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
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('zone_type');
            $table->unsignedBigInteger('municipality_id');
            $table->unsignedBigInteger('settlement_type_id');
            $table->unsignedBigInteger('zip_code_id');        
            $table->timestamps();

            $table->index(['zip_code_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
};
