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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('fname_ar');
            $table->string('lname_ar');
            $table->string('cne');
            $table->string('phone');
            $table->string('birthday');
            $table->string('niveau');
            $table->string('date_arrete');
            $table->string('status');
            $table->integer('quantity');
            $table->boolean('attestation');
            $table->boolean('attestation_ar');
            $table->boolean('releve');
            $table->boolean('releve_ar');
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
        Schema::dropIfExists('demandes');
    }
};
