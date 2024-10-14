<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('blog', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id');
        
        // Přidá vazbu na tabulku 'users' (předpokládám, že už tabulka 'users' existuje)
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('blog', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}
};
