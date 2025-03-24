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
        Schema::table('paket_edukasis', function (Blueprint $table) {
            $table->string('upload_gambar')->nullable()->after('deskripsi');
            $table->decimal('harga', 10, 2)->default(0)->after('upload_gambar');
        });
    }

    public function down(): void
    {
        Schema::table('paket_edukasis', function (Blueprint $table) {
            $table->dropColumn(['upload_gambar', 'harga']);
        });
    }
};
