<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class tienda extends Migration
{
    public function up()
    {
        Schema::create('tienda', function (Blueprint $table) {
            $table->id('id_producto');
            $table->string('producto');
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tienda');
    }
}
