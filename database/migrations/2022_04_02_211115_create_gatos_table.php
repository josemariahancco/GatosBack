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
        Schema::create('gatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('raza_id');
            $table->string('name',45);
            $table->date('date_of_birth');
            $table->enum('gender',['MACHO','HEMBRA'])->default('HEMBRA');
            $table->string('photo',128)->nullable();
            $table->timestamps();
            $table->foreign('raza_id')->references('id')->on('razas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gatos');
    }
};
