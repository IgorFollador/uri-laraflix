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
        Schema::create('nacionalidades', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
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
        Schema::table('atores', function (Blueprint $table) {
            $table->dropForeign('atores_nacionalidade_id_foreign');
        });
        Schema::dropIfExists('nacionalidades');
    }
};
