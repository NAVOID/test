<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('jenis_hewan_id')->constrained('jenis_hewan')->onDelete('cascade');
            $table->foreignId('kandang_id')->constrained('kandangs')->onDelete('cascade');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['Jantan', 'Betina']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hewan');
    }
};
