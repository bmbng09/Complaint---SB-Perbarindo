<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pic');
            $table->string('nama_bpr');
            $table->string('email');
            $table->string('dpd');
            $table->string('whatsapp');
            $table->enum('jenis_kendala', ['SIP', 'SB']);
            $table->text('deskripsi');
            $table->string('bukti_file')->nullable();
            $table->string('form_pengaduan')->nullable();
            $table->enum('status', ['new', 'process', 'done'])->default('new');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
