@extends('layouts.app')
@section('content')

<div class="p-4 sm:ml-60">
    <div class="p-2">
        <h1 class="text-2xl font-semibold mt-10 mb-4">Input Data Siswa</h1>
        <div class="border border-white p-2 rounded-lg text-center mb-5 bg-white text-black">
            <h2 class="text-xl font-semibold">Keterangan Pribadi Siswa</h2>
        </div>
        <!-- Keterangan Pribadi Siswa -->
        <form action="{{ route('siswa.storeData') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="NISN" class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
                    <input type="text" name="NISN" value="{{ old('NISN') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="namaLengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" name="namaLengkap" value="{{ old('namaLengkap') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="namaPanggilan" class="block mb-2 text-sm font-medium text-gray-900">Nama Panggilan</label>
                    <input type="text" name="namaPanggilan" value="{{ old('namaPanggilan') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="jenisKelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                    <select name="jenisKelamin" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Laki-laki" {{ old('jenisKelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="tempatLahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                    <input type="text" name="tempatLahir" value="{{ old('tempatLahir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalLahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahir" value="{{ old('tanggalLahir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                    <input type="text" name="agama" value="{{ old('agama') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kewarganegaraan" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="anakKe" class="block mb-2 text-sm font-medium text-gray-900">Anak Ke</label>
                    <input type="number" name="anakKe" value="{{ old('anakKe') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="saudaraKandung" class="block mb-2 text-sm font-medium text-gray-900">Saudara Kandung</label>
                    <input type="number" name="saudaraKandung" value="{{ old('saudaraKandung') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="saudaraTiri" class="block mb-2 text-sm font-medium text-gray-900">Saudara Tiri</label>
                    <input type="number" name="saudaraTiri" value="{{ old('saudaraTiri') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="saudaraAngkat" class="block mb-2 text-sm font-medium text-gray-900">Saudara Angkat</label>
                    <input type="number" name="saudaraAngkat" value="{{ old('saudaraAngkat') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="yatimPiatu" class="block mb-2 text-sm font-medium text-gray-900">Yatim Piatu</label>
                    <select name="yatimPiatu" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Tidak" {{ old('yatimPiatu') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                        <option value="Yatim" {{ old('yatimPiatu') == 'Yatim' ? 'selected' : '' }}>Yatim</option>
                        <option value="Piatu" {{ old('yatimPiatu') == 'Piatu' ? 'selected' : '' }}>Piatu</option>
                        <option value="Yatim Piatu" {{ old('yatimPiatu') == 'Yatim Piatu' ? 'selected' : '' }}>Yatim Piatu</option>
                    </select>
                </div>
                <div>
                    <label for="bahasaDirumah" class="block mb-2 text-sm font-medium text-gray-900">Bahasa di Rumah</label>
                    <input type="text" name="bahasaDirumah" value="{{ old('bahasaDirumah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Tempat Tinggal Siswa -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Tempat Tinggal Siswa</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="jalan" class="block mb-2 text-sm font-medium text-gray-900">Jalan</label>
                    <input type="text" name="jalan" value="{{ old('jalan') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kodePos" class="block mb-2 text-sm font-medium text-gray-900">Kode Pos</label>
                    <input type="text" name="kodePos" value="{{ old('kodePos') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="provinsi" class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                    <input type="text" name="provinsi" value="{{ old('provinsi') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tinggalBersama" class="block mb-2 text-sm font-medium text-gray-900">Tinggal Bersama</label>
                    <input type="text" name="tinggalBersama" value="{{ old('tinggalBersama') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="jarakKeSekolah" class="block mb-2 text-sm font-medium text-gray-900">Jarak ke Sekolah</label>
                    <input type="text" name="jarakKeSekolah" value="{{ old('jarakKeSekolah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kendaraan" class="block mb-2 text-sm font-medium text-gray-900">Kendaraan</label>
                    <input type="text" name="kendaraan" value="{{ old('kendaraan') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Jasmani dan Kesehatan Siswa -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Jasmani dan Kesehatan Siswa</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="beratDiterima" class="block mb-2 text-sm font-medium text-gray-900">Berat Badan Saat Diterima</label>
                    <input type="number" name="beratDiterima" value="{{ old('beratDiterima') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tinggiDiterima" class="block mb-2 text-sm font-medium text-gray-900">Tinggi Badan Saat Diterima</label>
                    <input type="number" name="tinggiDiterima" value="{{ old('tinggiDiterima') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="beratLulus" class="block mb-2 text-sm font-medium text-gray-900">Berat Badan Saat Lulus</label>
                    <input type="number" name="beratLulus" value="{{ old('beratLulus') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tinggiLulus" class="block mb-2 text-sm font-medium text-gray-900">Tinggi Badan Saat Lulus</label>
                    <input type="number" name="tinggiLulus" value="{{ old('tinggiLulus') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="golDarah" class="block mb-2 text-sm font-medium text-gray-900">Golongan Darah</label>
                    <input type="text" name="golDarah" value="{{ old('golDarah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="penyakitKhusus" class="block mb-2 text-sm font-medium text-gray-900">Penyakit Khusus</label>
                    <input type="text" name="penyakitKhusus" value="{{ old('penyakitKhusus') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Tentang Pendidikan Sebelumnya -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Tentang Pendidikan Sebelumnya</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="namaSD" class="block mb-2 text-sm font-medium text-gray-900">Asal Sekolah Dasar</label>
                    <input type="text" name="namaSD" value="{{ old('namaSD') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatSD" class="block mb-2 text-sm font-medium text-gray-900">Alamat Sekolah Dasar</label>
                    <input type="text" name="alamatSD" value="{{ old('alamatSD') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalIjazahSD" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Ijazah SD</label>
                    <input type="date" name="tanggalIjazahSD" value="{{ old('tanggalIjazahSD') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="noIjazahSD" class="block mb-2 text-sm font-medium text-gray-900">Nomor Ijazah SD</label>
                    <input type="text" name="noIjazahSD" value="{{ old('noIjazahSD') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="namaSMP" class="block mb-2 text-sm font-medium text-gray-900">Dari SMP</label>
                    <input type="text" name="namaSMP" value="{{ old('namaSMP') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatSMP" class="block mb-2 text-sm font-medium text-gray-900">Alamat Sekolah Menengah Pertama</label>
                    <input type="text" name="alamatSMP" value="{{ old('alamatSMP') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="diKelas" class="block mb-2 text-sm font-medium text-gray-900">Di Kelas</label>
                    <input type="text" name="diKelas" value="{{ old('diKelas') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alasanPindahKeSekolahIni" class="block mb-2 text-sm font-medium text-gray-900">Alasan Pindah ke Sekolah Ini</label>
                    <input type="text" name="alasanPindahKeSekolahIni" value="{{ old('alasanPindahKeSekolahIni') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Tentang Orang Tua Kandung -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Tentang Orang Tua Kandung</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="namaIbu" class="block mb-2 text-sm font-medium text-gray-900">Nama Ibu</label>
                    <input type="text" name="namaIbu" value="{{ old('namaIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="nomorTeleponIbu" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon Ibu</label>
                    <input type="text" name="nomorTeleponIbu" value="{{ old('nomorTeleponIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tempatLahirIbu" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir Ibu</label>
                    <input type="text" name="tempatLahirIbu" value="{{ old('tempatLahirIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalLahirIbu" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir Ibu</label>
                    <input type="date" name="tanggalLahirIbu" value="{{ old('tanggalLahirIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kewarganegaraanIbu" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan Ibu</label>
                    <input type="text" name="kewarganegaraanIbu" value="{{ old('kewarganegaraanIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pendidikanTertinggiIbu" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan Tertinggi Ibu</label>
                    <input type="text" name="pendidikanTertinggiIbu" value="{{ old('pendidikanTertinggiIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pekerjaanIbu" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaanIbu" value="{{ old('pekerjaanIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="penghasilanIbu" class="block mb-2 text-sm font-medium text-gray-900">Penghasilan Ibu</label>
                    <input type="text" name="penghasilanIbu" value="{{ old('penghasilanIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatIbu" class="block mb-2 text-sm font-medium text-gray-900">Alamat Ibu</label>
                    <input type="text" name="alamatIbu" value="{{ old('alamatIbu') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="namaAyah" class="block mb-2 text-sm font-medium text-gray-900">Nama Ayah</label>
                    <input type="text" name="namaAyah" value="{{ old('namaAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="nomorTeleponAyah" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon Ayah</label>
                    <input type="text" name="nomorTeleponAyah" value="{{ old('nomorTeleponAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tempatLahirAyah" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir Ayah</label>
                    <input type="text" name="tempatLahirAyah" value="{{ old('tempatLahirAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalLahirAyah" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir Ayah</label>
                    <input type="date" name="tanggalLahirAyah" value="{{ old('tanggalLahirAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kewarganegaraanAyah" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan Ayah</label>
                    <input type="text" name="kewarganegaraanAyah" value="{{ old('kewarganegaraanAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pendidikanTertinggiAyah" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan Tertinggi Ayah</label>
                    <input type="text" name="pendidikanTertinggiAyah" value="{{ old('pendidikanTertinggiAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pekerjaanAyah" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaanAyah" value="{{ old('pekerjaanAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="penghasilanAyah" class="block mb-2 text-sm font-medium text-gray-900">Penghasilan Ayah</label>
                    <input type="text" name="penghasilanAyah" value="{{ old('penghasilanAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatAyah" class="block mb-2 text-sm font-medium text-gray-900">Alamat Ayah</label>
                    <input type="text" name="alamatAyah" value="{{ old('alamatAyah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Tentang Wali -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Tentang Wali</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="namaWali" class="block mb-2 text-sm font-medium text-gray-900">Nama Wali</label>
                    <input type="text" name="namaWali" value="{{ old('namaWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="nomorTeleponWali" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon Wali</label>
                    <input type="text" name="nomorTeleponWali" value="{{ old('nomorTeleponWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tempatLahirWali" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir Wali</label>
                    <input type="text" name="tempatLahirWali" value="{{ old('tempatLahirWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalLahirWali" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir Wali</label>
                    <input type="date" name="tanggalLahirWali" value="{{ old('tanggalLahirWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="kewarganegaraanWali" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan Wali</label>
                    <input type="text" name="kewarganegaraanWali" value="{{ old('kewarganegaraanWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pendidikanTertinggiWali" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan Tertinggi Wali</label>
                    <input type="text" name="pendidikanTertinggiWali" value="{{ old('pendidikanTertinggiWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pekerjaanWali" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan Wali</label>
                    <input type="text" name="pekerjaanWali" value="{{ old('pekerjaanWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="penghasilanWali" class="block mb-2 text-sm font-medium text-gray-900">Penghasilan Wali</label>
                    <input type="text" name="penghasilanWali" value="{{ old('penghasilanWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatWali" class="block mb-2 text-sm font-medium text-gray-900">Alamat Wali</label>
                    <input type="text" name="alamatWali" value="{{ old('alamatWali') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="hubunganDenganSiswa" class="block mb-2 text-sm font-medium text-gray-900">Hubungan dengan Siswa</label>
                    <input type="text" name="hubunganDenganSiswa" value="{{ old('hubunganDenganSiswa') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Intelegensi, Kepribadian, dan Prestasi Siswa -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Intelegensi, Kepribadian, dan Prestasi Siswa</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="intelegensiIQ" class="block mb-2 text-sm font-medium text-gray-900">IQ</label>
                    <input type="number" name="intelegensiIQ" value="{{ old('intelegensiIQ') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalTesIQ" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Tes IQ</label>
                    <input type="date" name="tanggalTesIQ" value="{{ old('tanggalTesIQ') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="disiplin" class="block mb-2 text-sm font-medium text-gray-900">Disiplin</label>
                    <select name="disiplin" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('disiplin') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('disiplin') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('disiplin') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
                <div>
                    <label for="kreativitas" class="block mb-2 text-sm font-medium text-gray-900">Kreativitas</label>
                    <select name="kreativitas" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('kreativitas') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('kreativitas') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('kreativitas') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
                <div>
                    <label for="tanggungJawab" class="block mb-2 text-sm font-medium text-gray-900">Tanggung Jawab</label>
                    <select name="tanggungJawab" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('tanggungJawab') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('tanggungJawab') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('tanggungJawab') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
                <div>
                    <label for="penyesuaianDiri" class="block mb-2 text-sm font-medium text-gray-900">Penyesuaian Diri</label>
                    <select name="penyesuaianDiri" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('penyesuaianDiri') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('penyesuaianDiri') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('penyesuaianDiri') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
                <div>
                    <label for="kemantapanEmosi" class="block mb-2 text-sm font-medium text-gray-900">Kemantapan Emosi</label>
                    <select name="kemantapanEmosi" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('kemantapanEmosi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('kemantapanEmosi') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('kemantapanEmosi') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
                <div>
                    <label for="kerjasama" class="block mb-2 text-sm font-medium text-gray-900">Kerjasama</label>
                    <select name="kerjasama" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Baik" {{ old('kerjasama') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Cukup" {{ old('kerjasama') == 'Cukup' ? 'selected' : '' }}>Cukup</option>
                        <option value="Kurang" {{ old('kerjasama') == 'Kurang' ? 'selected' : '' }}>Kurang</option>
                    </select>
                </div>
            </div>
            <!-- Prestasi dan Beasiswa -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Prestasi dan Beasiswa</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="bidang" class="block mb-2 text-sm font-medium text-gray-900">Bidang</label>
                    <select name="bidang" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="Kesenian" {{ old('bidang') == 'Kesenian' ? 'selected' : '' }}>Kesenian</option>
                        <option value="Olahraga" {{ old('bidang') == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                        <option value="Organisasi" {{ old('bidang') == 'Organisasi' ? 'selected' : '' }}>Organisasi</option>
                        <option value="Pramuka" {{ old('bidang') == 'Pramuka' ? 'selected' : '' }}>Pramuka</option>
                        <option value="Karya Tulis" {{ old('bidang') == 'Karya Tulis' ? 'selected' : '' }}>Karya Tulis</option>
                    </select>
                </div>
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="keteranganPrestasi" class="block mb-2 text-sm font-medium text-gray-900">Keterangan Prestasi</label>
                    <input type="text" name="keteranganPrestasi" value="{{ old('keteranganPrestasi') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="penyelenggara" class="block mb-2 text-sm font-medium text-gray-900">Penyelenggara Beasiswa</label>
                    <input type="text" name="penyelenggara" value="{{ old('penyelenggara') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                    <input type="number" name="tahun" value="{{ old('tahun') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Keterangan Kehadiran -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Kehadiran</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                    <input type="text" name="kelas" value="{{ old('kelas') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900">Semester</label>
                    <input type="text" name="semester" value="{{ old('semester') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="jumlahHadir" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Hadir</label>
                    <input type="number" name="jumlahHadir" value="{{ old('jumlahHadir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="presentaseHadir" class="block mb-2 text-sm font-medium text-gray-900">Presentase Hadir</label>
                    <input type="number" step="0.01" name="presentaseHadir" value="{{ old('presentaseHadir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="sakit" class="block mb-2 text-sm font-medium text-gray-900">Sakit</label>
                    <input type="number" name="sakit" value="{{ old('sakit') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="izin" class="block mb-2 text-sm font-medium text-gray-900">Izin</label>
                    <input type="number" name="izin" value="{{ old('izin') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alpa" class="block mb-2 text-sm font-medium text-gray-900">Alpa</label>
                    <input type="number" name="alpa" value="{{ old('alpa') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="jumlahTidakHadir" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Tidak Hadir</label>
                    <input type="number" name="jumlahTidakHadir" value="{{ old('jumlahTidakHadir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="presentaseTidakHadir" class="block mb-2 text-sm font-medium text-gray-900">Presentase Tidak Hadir</label>
                    <input type="number" step="0.01" name="presentaseTidakHadir" value="{{ old('presentaseTidakHadir') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="jumlahHariBelajarEfektif" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Hari Belajar Efektif</label>
                    <input type="number" name="jumlahHariBelajarEfektif" value="{{ old('jumlahHariBelajarEfektif') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </div>
            <!-- Meninggalkan Sekolah -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Keterangan Meninggalkan Sekolah</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div>
                    <label for="noIjazah" class="block mb-2 text-sm font-medium text-gray-900">Nomor Ijazah</label>
                    <input type="text" name="noIjazah" value="{{ old('noIjazah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="tanggalLulus" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lulus</label>
                    <input type="date" name="tanggalLulus" value="{{ old('tanggalLulus') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="melanjutkanSekolahKe" class="block mb-2 text-sm font-medium text-gray-900">Melanjutkan Sekolah Ke</label>
                    <input type="text" name="melanjutkanSekolahKe" value="{{ old('melanjutkanSekolahKe') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="alamatSekolahLanjut" class="block mb-2 text-sm font-medium text-gray-900">Alamat Sekolah Lanjutan</label>
                    <input type="text" name="alamatSekolahLanjut" value="{{ old('alamatSekolahLanjut') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div>
                    <label for="pindahSekolahKe" class="block mb-2 text-sm font-medium text-gray-900">Pindah Sekolah Ke</label>
                    <input type="text" name="pindahSekolahKe" value="{{ old('pindahSekolahKe') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="dariKelas" class="block mb-2 text-sm font-medium text-gray-900">Dari Kelas</label>
                    <input type="text" name="dariKelas" value="{{ old('dariKelas') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="tanggalPindah" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pindah</label>
                    <input type="date" name="tanggalPindah" value="{{ old('tanggalPindah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="alamatSekolahPindah" class="block mb-2 text-sm font-medium text-gray-900">Alamat Sekolah Pindah</label>
                    <input type="text" name="alamatSekolahPindah" value="{{ old('alamatSekolahPindah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="alasanPindah" class="block mb-2 text-sm font-medium text-gray-900">Alasan Pindah</label>
                    <input type="text" name="alasanPindah" value="{{ old('alasanPindah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div>
                    <label for="alasanPutusSekolah" class="block mb-2 text-sm font-medium text-gray-900">Alasan Putus Sekolah</label>
                    <input type="text" name="alasanPutusSekolah" value="{{ old('alasanPutusSekolah') }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>
            <!-- Lain Lain -->
            <div class="border border-white p-2 rounded-lg text-center my-5 bg-white text-black">
                <h2 class="text-xl font-semibold">Lain-lain</h2>
            </div>
            <div class="grid grid-cols-1 gap-5">
                <div>
                    <label for="catatanPenting" class="block mb-2 text-sm font-medium text-gray-900">Catatan Penting</label>
                    <textarea name="catatanPenting" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" rows="5" required>{{ old('catatanPenting') }}</textarea>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan Data</button>
            </div>
        </form>
    </div>
</div>

@endsection