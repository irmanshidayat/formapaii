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
        <h2 style="margin-top:0px">Register_form <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Lengkap <?php echo form_error('nama_lengkap') ?></label>
            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
        </div>
	    <div class="form-group">
            <label for="bigint">Nomor Wa <?php echo form_error('nomor_wa') ?></label>
            <input type="text" class="form-control" name="nomor_wa" id="nomor_wa" placeholder="Nomor Wa" value="<?php echo $nomor_wa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Usia <?php echo form_error('usia') ?></label>
            <input type="text" class="form-control" name="usia" id="usia" placeholder="Usia" value="<?php echo $usia; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jenis_kelamin') ?></label>
            <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Info Pelatihan <?php echo form_error('info_pelatihan') ?></label>
            <input type="text" class="form-control" name="info_pelatihan" id="info_pelatihan" placeholder="Info Pelatihan" value="<?php echo $info_pelatihan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Daerah Domisili <?php echo form_error('daerah_domisili') ?></label>
            <input type="text" class="form-control" name="daerah_domisili" id="daerah_domisili" placeholder="Daerah Domisili" value="<?php echo $daerah_domisili; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Tujuan Pelatihan <?php echo form_error('tujuan_pelatihan') ?></label>
            <input type="text" class="form-control" name="tujuan_pelatihan" id="tujuan_pelatihan" placeholder="Tujuan Pelatihan" value="<?php echo $tujuan_pelatihan; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Kategori <?php echo form_error('kategori') ?></label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="<?php echo $kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Platform Jobseeker <?php echo form_error('platform_jobseeker') ?></label>
            <input type="text" class="form-control" name="platform_jobseeker" id="platform_jobseeker" placeholder="Platform Jobseeker" value="<?php echo $platform_jobseeker; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Pekerjaan <?php echo form_error('jenis_pekerjaan') ?></label>
            <input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" placeholder="Jenis Pekerjaan" value="<?php echo $jenis_pekerjaan; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Jenis Usaha Bisnis <?php echo form_error('jenis_usaha_bisnis') ?></label>
            <input type="text" class="form-control" name="jenis_usaha_bisnis" id="jenis_usaha_bisnis" placeholder="Jenis Usaha Bisnis" value="<?php echo $jenis_usaha_bisnis; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Sekolah Universitas <?php echo form_error('sekolah_universitas') ?></label>
            <input type="text" class="form-control" name="sekolah_universitas" id="sekolah_universitas" placeholder="Sekolah Universitas" value="<?php echo $sekolah_universitas; ?>" />
        </div>
	    <div class="form-group">
            <label for="enum">Kategori Pelatihan <?php echo form_error('kategori_pelatihan') ?></label>
            <input type="text" class="form-control" name="kategori_pelatihan" id="kategori_pelatihan" placeholder="Kategori Pelatihan" value="<?php echo $kategori_pelatihan; ?>" />
        </div>
	    <div class="form-group">
            <label for="link_sosmed">Link Sosmed <?php echo form_error('link_sosmed') ?></label>
            <textarea class="form-control" rows="3" name="link_sosmed" id="link_sosmed" placeholder="Link Sosmed"><?php echo $link_sosmed; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="timestamp">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('register_form') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>