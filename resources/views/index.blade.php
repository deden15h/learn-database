<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container text-center p-4">
        <h1>Soal 1</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal1 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 2</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal2 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 3</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal3 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 4</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal4 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 5</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal5 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 6</h1>
        <table class="table ">
            <thead>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Tanggal Masuk</th>
                <th>Status</th>
            </thead>
            <tbody>
                @forelse ($soal6 as $emp)
                    <tr>
                        <td>{{ $emp->nip }}</td>
                        <td>{{ $emp->nama_pegawai }}</td>
                        <td>{{ $emp->tanggal_lahir }}</td>
                        <td>{{ $emp->jabatan }}</td>
                        <td>{{ $emp->tanggal_masuk }}</td>
                        <td>{{ $emp->status }}</td>
                </tr> @empty <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 7</h1>
        <h2>Jumlah Seluruh Pegawai</h2>
        <h3>{{@count($soal7)}}</h3>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 9</h1>
        <h2>Jumlah Pegawai IT</h2>
        <h3>{{@count($soal9)}}</h3>
        <h2>Jumlah Pegawai Keuangan</h2>
        <h3>{{@count($soal9ku)}}</h3>
        <h2>Jumlah Pegawai Marketing</h2>
        <h3>{{@count($soal9mk)}}</h3>
        <h2>Jumlah Pegawai Produksi</h2>
        <h3>{{@count($soal9pr)}}</h3>
        <h2>Jumlah Pegawai Gudang</h2>
        <h3>{{@count($soal9gu)}}</h3>
        <h2>Jumlah Pegawai Delivery</h2>
        <h3>{{@count($soal9dv)}}</h3>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 10</h1>
        <h2>Jumlah Staf</h2>
        <h3>{{@count($soal10)}}</h3>
        <h2>Jumlah Asisten Manajer</h2>
        <h3>{{@count($soal10a)}}</h3>
        <h2>Jumlah Manajer</h2>
        <h3>{{@count($soal10m)}}</h3>
        <h2>Jumlah Supervisor</h2>
        <h3>{{@count($soal10s)}}</h3>
        <h2>Jumlah Kepala</h2>
        <h3>{{@count($soal10k)}}</h3>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 11</h1>
        <h2>Jumlah Pegawai yang Berstatus Cuti</h2>
        <h3>{{@count($soal11)}}</h3>
        <h2>Jumlah Pegawai yang Berstatus Aktif</h2>
        <h3>{{@count($soal111)}}</h3>
        <h2>Jumlah Pegawai yang Berstatus PHK</h2>
        <h3>{{@count($soal112)}}</h3>
        <h2>Jumlah Pegawai yang Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal113)}}</h3>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 18</h1>
        <h2>Jumlah Pegawai IT Berstatus Cuti</h2>
        <h3>{{@count($soal18)}}</h3>
        <h2>Jumlah Pegawai IT Berstatus Aktif</h2>
        <h3>{{@count($soal18a)}}</h3>
        <h2>Jumlah Pegawai IT Berstatus PHK</h2>
        <h3>{{@count($soal18b)}}</h3>
        <h2>Jumlah Pegawai IT Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18c)}}</h3>
        <h2>Jumlah Pegawai Keuangan Berstatus Cuti</h2>
        <h3>{{@count($soal18d)}}</h3>
        <h2>Jumlah Pegawai Keuangan Berstatus Aktif</h2>
        <h3>{{@count($soal18e)}}</h3>
        <h2>Jumlah Pegawai Keuangan Berstatus PHK</h2>
        <h3>{{@count($soal18f)}}</h3>
        <h2>Jumlah Pegawai Keuangan Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18g)}}</h3>
        <h2>Jumlah Pegawai Marketing Berstatus Cuti</h2>
        <h3>{{@count($soal18h)}}</h3>
        <h2>Jumlah Pegawai Marketing Berstatus Aktif</h2>
        <h3>{{@count($soal18i)}}</h3>
        <h2>Jumlah Pegawai Marketing Berstatus PHK</h2>
        <h3>{{@count($soal18j)}}</h3>
        <h2>Jumlah Pegawai Marketing Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18k)}}</h3>
        <h2>Jumlah Pegawai Produksi Berstatus Cuti</h2>
        <h3>{{@count($soal18l)}}</h3>
        <h2>Jumlah Pegawai Produksi Berstatus Aktif</h2>
        <h3>{{@count($soal18m)}}</h3>
        <h2>Jumlah Pegawai Produksi Berstatus PHK</h2>
        <h3>{{@count($soal18n)}}</h3>
        <h2>Jumlah Pegawai Produksi Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18o)}}</h3>
        <h2>Jumlah Pegawai Gudang Berstatus Cuti</h2>
        <h3>{{@count($soal18p)}}</h3>
        <h2>Jumlah Pegawai Gudang Berstatus Aktif</h2>
        <h3>{{@count($soal18q)}}</h3>
        <h2>Jumlah Pegawai Gudang Berstatus PHK</h2>
        <h3>{{@count($soal18r)}}</h3>
        <h2>Jumlah Pegawai Gudang Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18s)}}</h3>
        <h2>Jumlah Pegawai Delivery Berstatus Cuti</h2>
        <h3>{{@count($soal18t)}}</h3>
        <h2>Jumlah Pegawai Delivery Berstatus Aktif</h2>
        <h3>{{@count($soal18u)}}</h3>
        <h2>Jumlah Pegawai Delivery Berstatus PHK</h2>
        <h3>{{@count($soal18v)}}</h3>
        <h2>Jumlah Pegawai Delivery Berstatus Mengundurkan Diri</h2>
        <h3>{{@count($soal18w)}}</h3>
    </div>

    <div class="container text-center p-4">
        <h1>Soal 19</h1>
        <h2>Jumlah Pegawai IT dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai IT dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai IT dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai IT dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai IT dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>

        <h2>Jumlah Pegawai Keuangan dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Keuangan dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Keuangan dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Keuangan dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Keuangan dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>

        <h2>Jumlah Pegawai Marketing dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Marketing dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Marketing dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Marketing dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Marketing dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>

        <h2>Jumlah Pegawai Produksi dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Produksi dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Produksi dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Produksi dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Produksi dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>

        <h2>Jumlah Pegawai Gudang dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Gudang dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Gudang dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Gudang dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Gudang dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>

        <h2>Jumlah Pegawai Delivery dengan Jabatan Staf</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Delivery dengan Jabatan Asisten Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Delivery dengan Jabatan Manajer</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Delivery dengan Jabatan Suvervisor</h2>
        <h3>{{@count($soal19)}}</h3>
        <h2>Jumlah Pegawai Delivery dengan Jabatan Kepala</h2>
        <h3>{{@count($soal19)}}</h3>
    </div>

</body>

</html>
