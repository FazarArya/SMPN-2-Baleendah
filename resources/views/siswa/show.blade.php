@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-60">
    <div class="p-2">
        <h1 class="text-2xl font-semibold mt-10 mb-4">Detail Data Siswa</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 ">
            <div>
                <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
                <input type="text" id="nisn" aria-label="nisn"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->NISN }}" disabled>
            </div>
            <div>
                <label for="nama-lengkap" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                <input type="text" id="nama-lengkap" aria-label="nama lengkap"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->namaLengkap }}" disabled>
            </div>
            <div>
                <label for="nama-panggilan" class="block mb-2 text-sm font-medium text-gray-900">Nama Panggilan</label>
                <input type="text" id="nama-panggilan" aria-label="nama panggilan"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->namaPanggilan }}" disabled>
            </div>
            <div>
                <label for="jenis-kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                <input type="text" id="jenis-kelamin" aria-label="jenis kelamin"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->jenisKelamin }}" disabled>
            </div>
            <div>
                <label for="tempat-lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat Lahir</label>
                <input type="text" id="tempat-lahir" aria-label="tempat lahir"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->tempatLahir }}" disabled>
            </div>
            <div>
                <label for="tanggal-lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                <input type="text" id="tanggal-lahir" aria-label="tanggal lahir"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->tanggalLahir->format('d-m-Y') }}" disabled>
            </div>
            <div>
                <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                <input type="text" id="agama" aria-label="agama"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->agama }}" disabled>
            </div>
            <div>
                <label for="kewarganegaraan" class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan</label>
                <input type="text" id="kewarganegaraan" aria-label="kewarganegaraan"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->kewarganegaraan }}" disabled>
            </div>
            <div>
                <label for="anak-ke" class="block mb-2 text-sm font-medium text-gray-900">Anak Ke</label>
                <input type="text" id="anak-ke" aria-label="anak ke"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->anakKe }}" disabled>
            </div>
            <div>
                <label for="bahasa-dirumah" class="block mb-2 text-sm font-medium text-gray-900">Bahasa di Rumah</label>
                <input type="text" id="bahasa-dirumah" aria-label="bahasa di rumah"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                    value="{{ $siswa->bahasaDirumah }}" disabled>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('data-siswa') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back to Data Siswa</a>
        </div>
    </div>
</div>
@endsection
