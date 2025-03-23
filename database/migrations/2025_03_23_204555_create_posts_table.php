<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tanggal_post');
            $table->string('tag')->nullable();
            $table->string('slug')->unique();
            $table->string('upload_gambar'); // Menyimpan path gambar
            $table->string('alt_gambar')->nullable();
            $table->text('konten');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
