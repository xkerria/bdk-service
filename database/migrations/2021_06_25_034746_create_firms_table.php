<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firms', function (Blueprint $table) {
            $table->string('id', 19)->primary();
            $table->string('name', 64);
            $table->string('image', 1024)->nullable();
            $table->unsignedInteger('remain')->default(0);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->json('brands')->nullable();
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
        Schema::dropIfExists('firms');
    }
}