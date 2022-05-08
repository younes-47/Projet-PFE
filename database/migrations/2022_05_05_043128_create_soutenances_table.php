<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoutenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->string('num_etd');
            $table->string('filiere');
            $table->string('projet');
            $table->integer('num_salle')->nullable();
            $table->date('date_soutenance')->nullable();
            $table->string('encadrant')->nullable();
            $table->string('jury2')->nullable();
            $table->string('jury3')->nullable();
            $table->double('note_encadrant')->nullable();
            $table->double('note2')->nullable();
            $table->double('note3')->nullable();
            $table->double('note_finale')->nullable();
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
        Schema::dropIfExists('soutenances');
    }
}
