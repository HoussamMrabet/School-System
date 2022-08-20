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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullName', 56);
            $table->string('numInscription', 24);
            $table->string('cityBirth', 16);
            $table->string('birthday', 24);
            $table->string('niveau', 56);
            $table->string('dateArrete', 24);
            $table->string('cin', 12);
            $table->string('phone_number');
            $table->string('anneeScolaire', 24);
            $table->string('note', 256);
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
};
