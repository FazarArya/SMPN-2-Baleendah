@extends('operator.layout.layout')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-2">
        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6 mt-10">
            <!-- Total Siswa -->
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Total Siswa</h3>
                    <p class="text-2xl font-bold text-green-500">700</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-8 0v2m8-4a4 4 0 00-8 0m8-4a4 4 0 00-8 0" />
                    </svg>
                </div>
            </div>
            <!-- Siswa Laki-laki -->
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Siswa Laki-laki</h3>
                    <p class="text-2xl font-bold text-blue-500">567</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4H3a1 1 0 00-1 1v10a1 1 0 001 1h18a1 1 0 001-1V8a1 1 0 00-1-1h-2V3H5z" />
                    </svg>
                </div>
            </div>
            <!-- Siswi Perempuan -->
            <div class="flex items-center justify-between p-6 bg-white rounded-lg shadow-md">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Siswi Perempuan</h3>
                    <p class="text-2xl font-bold text-pink-500">133</p>
                </div>
                <div>
                    <svg class="w-8 h-8 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v6m0 0l3-3m-3 3l-3-3m6 6v12m-6-12v12" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Statistik Kelas -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4">Statistik Kelas</h3>
            <canvas id="classStats" class="w-full"></canvas>
        </div>
   </div>

    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('classStats').getContext('2d');
        const classStats = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Kelas 7', 'Kelas 8', 'Kelas 9'],
                datasets: [
                    {
                        label: 'Laki-laki',
                        data: [200, 250, 117],
                        backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    },
                    {
                        label: 'Perempuan',
                        data: [67, 83, 50],
                        backgroundColor: 'rgba(236, 72, 153, 0.8)',
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });
    </script>
</div>
@endsection