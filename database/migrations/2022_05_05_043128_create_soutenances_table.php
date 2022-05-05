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
            $table->integer('num_salle');
            $table->string('projet');
            $table->date('date_soutenance');
            $table->string('jury1');
            $table->string('jury2');
            $table->string('jury3');
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
