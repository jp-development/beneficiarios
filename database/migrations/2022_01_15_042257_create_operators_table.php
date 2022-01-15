<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('regional', 50);
            $table->string('zonalCenter', 50);
            $table->string('municipality', 50);
            $table->string('attentionModality', 50);
            $table->text('population');
            $table->string('contractNumber', 50);
            $table->string('institution', 50);
            $table->string('campus', 50);
            $table->string('phone', 50);
            $table->string('address', 50);
            $table->string('responsable', 50);
            $table->string('email', 50);
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
        Schema::dropIfExists('operators');
    }
}
