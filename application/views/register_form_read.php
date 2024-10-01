<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Register_form Read</h2>
        <table class="table">
	    <tr><td>Nama Lengkap</td><td><?php echo $nama_lengkap; ?></td></tr>
	    <tr><td>Nomor Wa</td><td><?php echo $nomor_wa; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Usia</td><td><?php echo $usia; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Info Pelatihan</td><td><?php echo $info_pelatihan; ?></td></tr>
	    <tr><td>Daerah Domisili</td><td><?php echo $daerah_domisili; ?></td></tr>
	    <tr><td>Tujuan Pelatihan</td><td><?php echo $tujuan_pelatihan; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Platform Jobseeker</td><td><?php echo $platform_jobseeker; ?></td></tr>
	    <tr><td>Jenis Pekerjaan</td><td><?php echo $jenis_pekerjaan; ?></td></tr>
	    <tr><td>Jenis Usaha Bisnis</td><td><?php echo $jenis_usaha_bisnis; ?></td></tr>
	    <tr><td>Sekolah Universitas</td><td><?php echo $sekolah_universitas; ?></td></tr>
	    <tr><td>Kategori Pelatihan</td><td><?php echo $kategori_pelatihan; ?></td></tr>
	    <tr><td>Link Sosmed</td><td><?php echo $link_sosmed; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('register_form') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>