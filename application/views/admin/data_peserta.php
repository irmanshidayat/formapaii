<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .table-container {
            margin: 20px 0;
        }
        .export-button {
            float: right; /* Mengapung tombol di kanan */
            margin-bottom: 10px; /* Memberikan jarak di bawah tombol */
            padding: 10px 15px;
            background-color: #28a745; /* Warna hijau untuk tombol */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .export-button:hover {
            background-color: #218838; /* Warna lebih gelap saat hover */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px; /* Memberikan jarak antara tombol dan tabel */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        thead {
            background-color: #007BFF;
            color: white;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
        th {
            font-weight: bold;
        }
        td {
            background-color: #fff;
        }
        /* Responsiveness */
        @media (max-width: 600px) {
            table {
                font-size: 12px;
            }
            th, td {
                padding: 8px;
            }
            .export-button {
                font-size: 12px;
                padding: 8px 12px;
            }
        }
    </style>
</head>
<body>
    <h1>Data Peserta</h1>
    
    <div class="table-container">
        <!-- <button class="export-button">Ekspor Data</button> -->
        <button class="export-button" onclick="window.location.href='<?= base_url('admin/ekspor_data'); ?>'">Ekspor Data</button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor WA</th>
                    <th>Email</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Info Pelatihan</th>
                    <th>Daerah Domisili</th>
                    <th>Tujuan Pelatihan</th>
                    <th>Kategori</th>
                    <th>Platform Jobseeker</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Sekolah/Universitas</th>
                    <th>Kategori Pelatihan</th>
                    <th>Link Sosmed</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($peserta as $p): ?>
                    <tr>
                        <td><?= $p->id; ?></td>
                        <td><?= $p->nama_lengkap; ?></td>
                        <td><?= $p->nomor_wa; ?></td>
                        <td><?= $p->email; ?></td>
                        <td><?= $p->usia; ?></td>
                        <td><?= $p->jenis_kelamin; ?></td>
                        <td><?= $p->info_pelatihan; ?></td>
                        <td><?= $p->daerah_domisili; ?></td>
                        <td><?= $p->tujuan_pelatihan; ?></td>
                        <td><?= $p->kategori; ?></td>
                        <td><?= $p->platform_jobseeker; ?></td>
                        <td><?= $p->jenis_pekerjaan; ?></td>
                        <td><?= $p->sekolah_universitas; ?></td>
                        <td><?= $p->kategori_pelatihan; ?></td>
                        <td><?= $p->link_sosmed; ?></td>
                        <td><?= $p->created_at; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
