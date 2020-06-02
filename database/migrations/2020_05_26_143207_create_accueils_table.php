<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccueilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            $table->string('urlmenulogo');
            $table->string('lien1');
            $table->string('lien2');
            $table->string('lien3');
            $table->string('lien4');
            $table->string('slogan');
            $table->string('urlvideo');
            $table->string('titretestimonials');
            $table->string('titreteam');
            $table->string('titreready');
            $table->string('soustitreready');
            $table->string('boutonready');
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
        Schema::dropIfExists('accueils');
    }
}
