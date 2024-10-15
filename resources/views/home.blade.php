@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard</h2>
    <!-- Statistik Utama -->
    <div class="stats">
        <div class="card bg-light shadow-sm">
            <h4>Pelanggan</h4>
            <h2>425,000</h2>
        </div>
        <div class="card bg-light shadow-sm">
            <h4>Kurir</h4>
            <h2>205,399</h2>
        </div>
        <div class="card bg-light shadow-sm">
            <h4>Dropbox</h4>
            <h2>142,593</h2>
        </div>
        <div class="card bg-light shadow-sm">
            <h4>Total Poin</h4>
            <h2>3,892,120</h2>
        </div>
    </div>

    <!-- Tabel Transaksi Terbaru -->
    <div class="transactions-table">
        <div class="card">
            <div class="card-header">Transaksi Terbaru</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="color: white">Pelanggan</th>
                            <th style="color: white">Kurir</th>
                            <th style="color: white">Jenis Sampah</th>
                            <th style="color: white">Tanggal Transaksi</th>
                            <th style="color: white">Total Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Jane Smith</td>
                            <td>Plastik</td>
                            <td>2024-10-12</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Anna Johnson</td>
                            <td>Jack Wilson</td>
                            <td>Logam</td>
                            <td>2024-10-11</td>
                            <td>1200</td>
                        </tr>
                        <tr>
                            <td>David Brown</td>
                            <td>Emily Davis</td>
                            <td>Kertas</td>
                            <td>2024-10-10</td>
                            <td>300</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Statistik Kategori Sampah -->
    <div class="stats mt-5">
        <div class="card bg-light shadow-sm">
            <h4>Plastik</h4>
            <p>Jumlah: 12,000 kg</p>
        </div>
        <div class="card bg-light shadow-sm">
            <h4>Logam</h4>
            <p>Jumlah: 8,500 kg</p>
        </div>
        <div class="card bg-light shadow-sm">
            <h4>Kertas</h4>
            <p>Jumlah: 5,300 kg</p>
        </div>
    </div>
@endsection
