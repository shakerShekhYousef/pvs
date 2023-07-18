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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('maker');
            $table->string('model');
            $table->text('title');
            $table->string('year');
            $table->string('slug')->unique();
            $table->string('km');
            $table->string('regional_specs');
            $table->boolean('warranty')->default(0);
            $table->string('color');
            $table->string('doors')->nullable();
            $table->string('body_condition')->nullable();
            $table->string('mechanical_condition')->nullable();
            $table->string('interior_color');
            $table->string('seller_type')->nullable();
            $table->string('body_type')->nullable();
            $table->integer('no_cylinders');
            $table->string('transmission_type');
            $table->string('horse_power')->nullable();
            $table->string('steering_side')->nullable();
            $table->string('fuel_type');
            $table->text('extras');
            $table->double('price_aed');
            $table->double('price_africa');
            $table->string('main_image');
            $table->string('whatsapp_uae');
            $table->string('whatsapp_africa');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('cars');
    }
};
