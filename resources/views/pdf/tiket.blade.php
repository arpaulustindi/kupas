<!DOCTYPE html>
<html>
<head>
    <title>Tiket Kunjungan</title>
</head>
<body>
    <h1>Tiket Kunjungan: {{ $kunjungan->tiket }}</h1>
    <p>Nama Pengunjung: {{ $kunjungan->nama_pengunjung }}</p>
    <p>NIK: {{ $kunjungan->nik }}</p>
    <p>Narapidana: {{ $kunjungan->narapidana }}</p>
    <p>Tanggal Kunjungan: {{ $kunjungan->tanggal_kunjungan }}</p>
    <p>Sesi Kunjungan: {{ $kunjungan->sesi_kunjungan }}</p>
    <p>Waktu Antrian: {{ $kunjungan->waktu_antrian }}</p>
    <p>Status Periksa: {{ $kunjungan->status_periksa }}</p>
</body>
</html>
