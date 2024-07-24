<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueToStatusInMoUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mo_u_s', function (Blueprint $table) {
            $table->string('status')->default('Berlaku')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mo_u_s', function (Blueprint $table) {
            $table->string('status')->default(null)->change();
        });
    }
}