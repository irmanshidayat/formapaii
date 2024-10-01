<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body {
                background-color: #f8f9fa; /* Light grey background */
                padding: 20px;
            }
            h2 {
                color: #343a40; /* Dark grey */
            }
            .table th {
                background-color: #007bff; /* Blue header */
                color: white;
            }
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #f2f2f2; /* Zebra striping */
            }
            .table-hover tbody tr:hover {
                background-color: #ffebcc; /* Light orange on hover */
            }
            .btn-custom {
                background-color: #17a2b8; /* Custom color button */
                color: white;
            }
            .btn-custom:hover {
                background-color: #138496; /* Darker custom button on hover */
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Register_form List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('register_form/create'), 'Create', 'class="btn btn-success"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('register_form/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>" placeholder="Search...">
                        <span class="input-group-btn">
                            <?php 
                            if ($q <> '') {
                                ?>
                                <a href="<?php echo site_url('register_form'); ?>" class="btn btn-warning">Reset</a>
                                <?php
                            }
                            ?>
                            <button class="btn btn-info" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        
        <table class="table table-bordered table-striped table-hover" style="margin-bottom: 10px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nomor Wa</th>
                    <th>Email</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Info Pelatihan</th>
                    <th>Daerah Domisili</th>
                    <th>Tujuan Pelatihan</th>
                    <th>Kategori</th>
                    <th>Platform Jobseeker</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Jenis Usaha Bisnis</th>
                    <th>Sekolah Universitas</th>
                    <th>Kategori Pelatihan</th>
                    <th>Link Sosmed</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($register_form_data as $register_form) { ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $register_form->nama_lengkap ?></td>
                    <td><?php echo $register_form->nomor_wa ?></td>
                    <td><?php echo $register_form->email ?></td>
                    <td><?php echo $register_form->usia ?></td>
                    <td><?php echo $register_form->jenis_kelamin ?></td>
                    <td><?php echo $register_form->info_pelatihan ?></td>
                    <td><?php echo $register_form->daerah_domisili ?></td>
                    <td><?php echo $register_form->tujuan_pelatihan ?></td>
                    <td><?php echo $register_form->kategori ?></td>
                    <td><?php echo $register_form->platform_jobseeker ?></td>
                    <td><?php echo $register_form->jenis_pekerjaan ?></td>
                    <td><?php echo $register_form->jenis_usaha_bisnis ?></td>
                    <td><?php echo $register_form->sekolah_universitas ?></td>
                    <td><?php echo $register_form->kategori_pelatihan ?></td>
                    <td><?php echo $register_form->link_sosmed ?></td>
                    <td><?php echo $register_form->created_at ?></td>
                    <td style="text-align:center" width="200px">
                        <?php 
                        echo anchor(site_url('register_form/read/'.$register_form->id), 'Read', 'class="btn btn-info btn-sm"'); 
                        echo ' | '; 
                        echo anchor(site_url('register_form/update/'.$register_form->id), 'Update', 'class="btn btn-warning btn-sm"'); 
                        echo ' | '; 
                        echo anchor(site_url('register_form/delete/'.$register_form->id), 'Delete', 'class="btn btn-danger btn-sm" onclick="javascript: return confirm(\'Are You Sure ?\')"'); 
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record: <?php echo $total_rows ?></a>
                <?php echo anchor(site_url('register_form/excel'), 'Excel', 'class="btn btn-success"'); ?>
            </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>
