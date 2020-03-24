<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("noticias",function(Blueprint $table) {
        $table->string('cuerpo');
        });

        Schema::table('noticias', function (Blueprint $table) {
        $table->renameColumn('descripcion', 'entrada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticias', function (Blueprint $table) {
        $table->dropColumn('cuerpo');
        $table->renameColumn('entrada', 'descripcion');
        });
    }
}
