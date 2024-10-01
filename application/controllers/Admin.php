<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct() {
        parent::__construct();
        // $this->load->model('Menu_model');
		// $this->load->model('Menusx_model');
		$this->load->model('Register_form_model');
        $this->load->library('form_validation');
		$this->load->library('form_validation');
		 // Memuat library session
   		$this->load->library('session');
    }


	
	
	public function index()
	{
		$data['irman']="Dashboard Admin";		
		$this->load->view('admin/template/header',$data);
		$this->load->view('admin/home/dashboard',$data);
		$this->load->view('admin/template/footer',$data);
		
		
		
	}

// ekspor data
// ekspor data
public function ekspor_dataxxxx() {
	// Load model
	$this->load->model('Register_form_model');
	
	// Ambil data dari model
	$data = $this->Register_form_model->get_all(); // Ganti dengan nama metode yang sesuai
	
	// Load PHPExcel library
	$this->load->library('PHPExcel'); // Pastikan Anda sudah menginstal PHPExcel atau PhpSpreadsheet
	
	// Buat objek PHPExcel
	$excel = new PHPExcel();

	// Set judul sheet
	$excel->setActiveSheetIndex(0)->setTitle('Data Peserta');

	// Set header kolom
	$excel->getActiveSheet()->setCellValue('A1', 'ID');
	$excel->getActiveSheet()->setCellValue('B1', 'Nama Lengkap');
	$excel->getActiveSheet()->setCellValue('C1', 'Nomor WA');
	$excel->getActiveSheet()->setCellValue('D1', 'Email');
	$excel->getActiveSheet()->setCellValue('E1', 'Usia');
	$excel->getActiveSheet()->setCellValue('F1', 'Jenis Kelamin');
	$excel->getActiveSheet()->setCellValue('G1', 'Info Pelatihan');
	$excel->getActiveSheet()->setCellValue('H1', 'Daerah Domisili');
	$excel->getActiveSheet()->setCellValue('I1', 'Tujuan Pelatihan');
	$excel->getActiveSheet()->setCellValue('J1', 'Kategori');
	$excel->getActiveSheet()->setCellValue('K1', 'Platform Jobseeker');
	$excel->getActiveSheet()->setCellValue('L1', 'Jenis Pekerjaan');
	$excel->getActiveSheet()->setCellValue('M1', 'Sekolah/Universitas');
	$excel->getActiveSheet()->setCellValue('N1', 'Kategori Pelatihan');
	$excel->getActiveSheet()->setCellValue('O1', 'Link Sosmed');
	$excel->getActiveSheet()->setCellValue('P1', 'Tanggal Daftar');

	// Isi data dari database
	$row = 2; // Mulai dari baris kedua setelah header
	foreach ($data as $p) {
		$excel->getActiveSheet()->setCellValue('A' . $row, $p->id);
		$excel->getActiveSheet()->setCellValue('B' . $row, $p->nama_lengkap);
		$excel->getActiveSheet()->setCellValue('C' . $row, $p->nomor_wa);
		$excel->getActiveSheet()->setCellValue('D' . $row, $p->email);
		$excel->getActiveSheet()->setCellValue('E' . $row, $p->usia);
		$excel->getActiveSheet()->setCellValue('F' . $row, $p->jenis_kelamin);
		$excel->getActiveSheet()->setCellValue('G' . $row, $p->info_pelatihan);
		$excel->getActiveSheet()->setCellValue('H' . $row, $p->daerah_domisili);
		$excel->getActiveSheet()->setCellValue('I' . $row, $p->tujuan_pelatihan);
		$excel->getActiveSheet()->setCellValue('J' . $row, $p->kategori);
		$excel->getActiveSheet()->setCellValue('K' . $row, $p->platform_jobseeker);
		$excel->getActiveSheet()->setCellValue('L' . $row, $p->jenis_pekerjaan);
		$excel->getActiveSheet()->setCellValue('M' . $row, $p->sekolah_universitas);
		$excel->getActiveSheet()->setCellValue('N' . $row, $p->kategori_pelatihan);
		$excel->getActiveSheet()->setCellValue('O' . $row, $p->link_sosmed);
		$excel->getActiveSheet()->setCellValue('P' . $row, $p->created_at);
		$row++;
	}

	// Set header untuk download
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="Data_Peserta.xlsx"');
	header('Cache-Control: max-age=0');

	// Simpan dan unduh file
	$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
	$writer->save('php://output');
	exit;
}


public function ekspor_data()
{
	$this->load->helper('exportexcel');
	$namaFile = "register_form.xls";
	$judul = "register_form";
	$tablehead = 0;
	$tablebody = 1;
	$nourut = 1;
	//penulisan header
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
	header("Content-Type: application/force-download");
	header("Content-Type: application/octet-stream");
	header("Content-Type: application/download");
	header("Content-Disposition: attachment;filename=" . $namaFile . "");
	header("Content-Transfer-Encoding: binary ");

	xlsBOF();

	$kolomhead = 0;
	xlsWriteLabel($tablehead, $kolomhead++, "No");
xlsWriteLabel($tablehead, $kolomhead++, "Nama Lengkap");
xlsWriteLabel($tablehead, $kolomhead++, "Nomor Wa");
xlsWriteLabel($tablehead, $kolomhead++, "Email");
xlsWriteLabel($tablehead, $kolomhead++, "Usia");
xlsWriteLabel($tablehead, $kolomhead++, "Jenis Kelamin");
xlsWriteLabel($tablehead, $kolomhead++, "Info Pelatihan");
xlsWriteLabel($tablehead, $kolomhead++, "Daerah Domisili");
xlsWriteLabel($tablehead, $kolomhead++, "Tujuan Pelatihan");
xlsWriteLabel($tablehead, $kolomhead++, "Kategori");
xlsWriteLabel($tablehead, $kolomhead++, "Platform Jobseeker");
xlsWriteLabel($tablehead, $kolomhead++, "Jenis Pekerjaan");
xlsWriteLabel($tablehead, $kolomhead++, "Jenis Usaha Bisnis");
xlsWriteLabel($tablehead, $kolomhead++, "Sekolah Universitas");
xlsWriteLabel($tablehead, $kolomhead++, "Kategori Pelatihan");
xlsWriteLabel($tablehead, $kolomhead++, "Link Sosmed");
xlsWriteLabel($tablehead, $kolomhead++, "Created At");

foreach ($this->Register_form_model->get_all() as $data) {
		$kolombody = 0;

		//ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
		xlsWriteNumber($tablebody, $kolombody++, $nourut);
	xlsWriteLabel($tablebody, $kolombody++, $data->nama_lengkap);
	xlsWriteLabel($tablebody, $kolombody++, $data->nomor_wa);
	xlsWriteLabel($tablebody, $kolombody++, $data->email);
	xlsWriteLabel($tablebody, $kolombody++, $data->usia);
	xlsWriteLabel($tablebody, $kolombody++, $data->jenis_kelamin);
	xlsWriteLabel($tablebody, $kolombody++, $data->info_pelatihan);
	xlsWriteLabel($tablebody, $kolombody++, $data->daerah_domisili);
	xlsWriteLabel($tablebody, $kolombody++, $data->tujuan_pelatihan);
	xlsWriteLabel($tablebody, $kolombody++, $data->kategori);
	xlsWriteLabel($tablebody, $kolombody++, $data->platform_jobseeker);
	xlsWriteLabel($tablebody, $kolombody++, $data->jenis_pekerjaan);
	xlsWriteLabel($tablebody, $kolombody++, $data->jenis_usaha_bisnis);
	xlsWriteLabel($tablebody, $kolombody++, $data->sekolah_universitas);
	xlsWriteLabel($tablebody, $kolombody++, $data->kategori_pelatihan);
	xlsWriteLabel($tablebody, $kolombody++, $data->link_sosmed);
	xlsWriteLabel($tablebody, $kolombody++, $data->created_at);

	$tablebody++;
		$nourut++;
	}

	xlsEOF();
	exit();
}


	

}
