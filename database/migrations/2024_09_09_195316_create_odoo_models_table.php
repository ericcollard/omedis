<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('odoo_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('comment');
            $table->string('dest_model')->default('template');
            $table->set('mode', ['search', 'search_multiple','value']);
            $table->string('field');
            $table->boolean('mandatory');
            $table->set('type', ['string', 'float','image'])->nullable();
            $table->string('model')->nullable();
            $table->string('search_field')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('odoo_models');
    }
};
