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
        Schema::create('pendidikan_sebelumnya', function (Blueprint $table) {
            $table->increments('sekolahDasarID');
            $table->string('namaSD', 100); 
            $table->date('alamatSekolah', 255)->nullable();
            $table->string('melanjutkanSekolahKe', 255)->nullable();
            $table->string('alamatSekolah', 255)->nullable();
            $table->timestamps();

            // foreign key
            $table  ->foreign('SiswasiswaID')
                    ->references('siswaID')
                    ->on('siswa')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikan_sebelumnya');
    }
};
