<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeOffersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('free_offers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('aquire_property');
            $table->string('state');
            $table->string('county');
            $table->string('city');
            $table->string('zip_code');
            $table->string('apn')->nullable();
            $table->string('more_than_one_property');
            $table->string('vacant_land_in_different_state');
            $table->string('currently_live_in_different_state');
            $table->string('priority');
            $table->boolean('agree');
            $table->boolean('agree1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_offers');
    }
}
