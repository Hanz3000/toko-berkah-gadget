<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('produk_id')->constrained('produk')->onDelete('cascade');
            $table->timestamps();

            // Memastikan user tidak bisa menambahkan produk yang sama ke wishlist
            $table->unique(['user_id', 'produk_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('wishlists');
    }
};
