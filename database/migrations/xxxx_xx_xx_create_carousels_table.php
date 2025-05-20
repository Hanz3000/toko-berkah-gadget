<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('carousels', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar');
            $table->decimal('harga_normal', 12, 0);
            $table->decimal('harga_diskon', 12, 0);
            $table->integer('jumlah_review')->default(0);
            $table->string('badge_text')->nullable();
            $table->string('badge_color')->default('accent-500');
            $table->string('badge_animation')->nullable();
            $table->boolean('aktif')->default(true);
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carousels');
    }
};
