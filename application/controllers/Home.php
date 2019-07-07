<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() // untuk load secara global
	{
		parent::__construct();

		$this->load->library('pagination');
		$this->load->model('sistem_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function sistem()
	{
		$this->load->view('sistem');
	}

	public function proses()
	{
		$id 	 = $this->input->post('formID');
		$tgl	 = $this->input->post('formTgl');
		$hewan 	 = $this->input->post('formHewan');
		$umur 	 = $this->input->post('formUmur');
		$kondisi = $this->input->post('formKondisi');
		$hasil	 = $this->input->post('formHasil');

		/*  untuk kondisi hewan
			halal/layak = tidak dipilih semua
			makruh = 'kuping terpotong', 'tanduk pecah'
			haram/tidak layak = buta sebelah', 'pincang kaki', 'sakit parah'
		*/ 		
		
		$kondisi_array1  = array('buta sebelah', 'pincang kaki', 'sakit parah', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array2  = array('pincang kaki', 'sakit parah', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array3  = array('buta sebelah', 'sakit parah', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array4  = array('buta sebelah', 'pincang kaki', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array5  = array('buta sebelah', 'pincang kaki', 'sakit parah', 'tanduk pecah');
		$kondisi_array6  = array('buta sebelah', 'pincang kaki', 'sakit parah', 'kuping terpotong');
		$kondisi_array7  = array('sakit parah', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array8  = array('pincang kaki', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array9  = array('pincang kaki', 'sakit parah', 'tanduk pecah');
		$kondisi_array10 = array('pincang kaki', 'sakit parah', 'kuping terpotong');
		$kondisi_array11 = array('buta sebelah', 'kuping terpotong', 'tanduk pecah');
		$kondisi_array12 = array('buta sebelah', 'sakit parah', 'tanduk pecah');
		$kondisi_array13 = array('buta sebelah', 'sakit parah', 'kuping terpotong');
		$kondisi_array14 = array('buta sebelah', 'pincang kaki', 'tanduk pecah');
		$kondisi_array15 = array('buta sebelah', 'pincang kaki', 'kuping terpotong');
		$kondisi_array16 = array('buta sebelah', 'pincang kaki', 'sakit parah');
		$kondisi_array17 = array('buta sebelah', 'pincang kaki');
		$kondisi_array18 = array('buta sebelah', 'sakit parah');
		$kondisi_array19 = array('buta sebelah', 'kuping terpotong');
		$kondisi_array20 = array('buta sebelah', 'tanduk pecah');
		$kondisi_array21 = array('pincang kaki', 'sakit parah');
		$kondisi_array22 = array('pincang kaki', 'kuping terpotong');
		$kondisi_array23 = array('pincang kaki', 'tanduk pecah');
		$kondisi_array24 = array('sakit parah', 'kuping terpotong');
		$kondisi_array25 = array('sakit parah', 'tanduk pecah');
		$kondisi_array26 = array('kuping terpotong', 'tanduk pecah');
		$kondisi_array27 = array('buta sebelah');
		$kondisi_array28 = array('pincang kaki');
		$kondisi_array29 = array('sakit parah');
		$kondisi_array30 = array('kuping terpotong');
		$kondisi_array31 = array('tanduk pecah');
		$kondisi_array_kosong = array('');

		if (empty($kondisi))
		{ $kondisi_array_kosong = $kondisi; }

		/* untuk umur halal
		   sapi minimal 24 bulan / 2 tahun
		   kambing minimal 12 bulan / 1 tahun
		   domba minimal 6 bulan
		   unta minimal 60 bulan / 5 tahun
		*/

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array1)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array2)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array3)
			{ $hasil = "haram/tidak layak"; }
			
		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array4)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array5)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array6)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array7)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array8)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array9)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array10)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array11)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array12)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array13)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array14)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array15)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array16)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array17)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array18)
			{ $hasil = "haram/tidak layak"; }		

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array19)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array20)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array21)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array22)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array23)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array24)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array25)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array26)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array26)
			{ $hasil = "makruh"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array26)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array26)
			{ $hasil = "makruh"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array26)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array26)
			{ $hasil = "makruh"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array26)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array26)
			{ $hasil = "makruh"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array27)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array28)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array29)
			{ $hasil = "haram/tidak layak"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array30)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array30)
			{ $hasil = "makruh"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array30)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array30)
			{ $hasil = "makruh"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array30)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array30)
			{ $hasil = "makruh"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array30)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array30)
			{ $hasil = "makruh"; }

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array31)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array31)
			{ $hasil = "makruh"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array31)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array31)
			{ $hasil = "makruh"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array31)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array31)
			{ $hasil = "makruh"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array31)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array31)
			{ $hasil = "makruh"; }		

		if ($hewan == "sapi" && intval($umur) < 24 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "sapi" && intval($umur) >= 24 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "halal/layak"; }
		if ($hewan == "kambing" && intval($umur) < 12 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "kambing" && intval($umur) >= 12 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "halal/layak"; }
		if ($hewan == "domba" && intval($umur) < 6 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "domba" && intval($umur) >= 6 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "halal/layak"; }
		if ($hewan == "unta" && intval($umur) < 60 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "haram/tidak layak"; }
		if ($hewan == "unta" && intval($umur) >= 60 && $kondisi == $kondisi_array_kosong)
			{ $hasil = "halal/layak"; }	

		//var_dump($kondisi); exit;
		
		$data = array(
			'id_history'  	=> $id,
			'tgl_history' 	=> $tgl,
			'jenis_hewan' 	=> $hewan,
			'umur_hewan' 	=> $umur,
			'kondisi_hewan' => json_encode($kondisi),
			'hasil' 		=> $hasil
			);

		$this->sistem_model->input_data($data, 'history');
		$this->session->set_flashdata('hasil', $hasil);
		redirect('home/sistem');
	}

	public function histori()
	{
		$jumlah_data = $this->sistem_model->jumlah_data_histori();
		$config['base_url'] = base_url().'home/histori';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		include 'application/views/komponen/pagination.php';
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['history'] = $this->sistem_model->read_histori($config['per_page'],$from);
		$this->load->view('histori',$data);
	}

	public function tentang()
	{
		$this->load->view('tentang');
	}

	public function login()
	{
		$this->load->view('login');
	}
}
