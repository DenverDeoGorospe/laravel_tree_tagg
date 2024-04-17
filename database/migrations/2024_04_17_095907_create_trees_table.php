<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trees', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('userid')->unsigned()->nullable(false);
            $table->string('alias');
            $table->string('species');
            $table->string('planter');
            $table->string('location')->nullable();
            $table->datetime('date_planted');
            $table->datetime('date_tagged');

            $table->foreign('userid')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trees');
    }
};
