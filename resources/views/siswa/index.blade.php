@extends('layouts.app')
@section('content')

<div class="p-4 sm:ml-60">
    <div class="p-2">
        <h1 class="text-2xl font-semibold mt-10 mb-4 text-gray-700">Data Siswa</h1>
        
        <!-- Search Bar -->
        <div class="mb-4">
            <form action="{{ route('data-siswa') }}" method="GET" class="relative">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Cari Siswa Berdasarkan NIS atau Nama..." 
                    value="{{ request('search') }}" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <svg class="absolute right-3 top-3 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M16 10a6 6 0 11-12 0 6 6 0 0112 0z"/>
                </svg>
            </form>
        </div>
        
        <!-- Data Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-green-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 border-b text-center">NISN</th>
                        <th class="py-3 px-4 border-b text-center">Nama Lengkap</th>
                        <th class="py-3 px-4 border-b text-center">Jenis Kelamin</th>
                        <th class="py-3 px-4 border-b text-center">Tanggal Lahir</th>
                        <th class="py-3 px-4 border-b text-center">Kewarganegaraan</th>
                        <th class="py-3 px-4 border-b text-center">Anak Ke</th>
                        <th class="py-3 px-4 border-b text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $data)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4 border-b text-center">{{ $data->NISN }}</td>
                        <td class="py-3 px-4 border-b text-center">{{ $data->namaLengkap }}</td>
                        <td class="py-3 px-4 border-b text-center">{{ $data->jenisKelamin }}</td>
                        <td class="py-3 px-4 border-b text-center">{{ $data->tanggalLahir->format('d-m-Y') }}</td>
                        <td class="py-3 px-4 border-b text-center">{{ $data->kewarganegaraan }}</td>
                        <td class="py-3 px-4 border-b text-center">{{ $data->anakKe }}</td>
                        <td class="py-3 px-4 border-b text-center">
                            <div class="flex justify-center space-x-2">
                                <!-- Tombol Detail -->
                                <a href="{{ route('siswa.show', $data->siswaID) }}" class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-4 py-2" title="Detail">
                                    Detail
                                </a>
                                @if(Auth::check() && Auth::user()->role === 'staff') <!-- Check if the user is a staff -->
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('siswa.edit', $data->siswaID) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white rounded-lg px-4 py-2" title="Edit">
                                        Edit
                                    </a>
                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('siswa.destroy', $data->siswaID) }}" method="POST" class="inline" title="Hapus">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-500 hover:bg-red-600 text-white rounded-lg px-4 py-2">
                                            Hapus
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="mt-4">
                {{ $siswa->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
