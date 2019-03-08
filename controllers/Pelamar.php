<?php 

/**
 * 
 */
class Pelamar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelamar_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}

	public function index()
	{
		$data['judul'] = 'Data Pelamar';
		$data['tb_pelamar'] = $this->Pelamar_model->getAllPelamar();
		if ($this->input->post('keyword')) {
			$data['tb_pelamar'] = $this->Pelamar_model->cariDataPelamar();
		}

		$config['base_url'] = base_url().'pelamar/';
		$config['total_rows'] = 10;
		$config['per_page'] = 2;

		$this->pagination->initialize($config);

		$this->load->view('templates/header', $data);
		$this->load->view('pelamar/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Pelamar';
		$this->form_validation->set_rules('nama' , 'Nama' , 'required');
		$this->form_validation->set_rules('ktp' , 'KTP' , 'required|numeric');
		$this->form_validation->set_rules('nohp' , 'Nomor HP' , 'required|numeric');
		$this->form_validation->set_rules('email' , 'Email' , 'required|valid_email');
		$this->form_validation->set_rules('alamat' , 'Alamat' , 'required');
		$this->form_validation->set_rules('pendidikan' , 'Pendidikan' , 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('pelamar/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Pelamar_model->tambahDataPelamar();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pelamar');
		}
	}

	public function hapus($id_pelamar)
	{
		$this->Pelamar_model->hapusDataPelamar($id_pelamar);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('pelamar');
	}

	public function detail($id_pelamar)
	{
		$data['judul']= 'Detail Data Pelamar';
		$data['tb_pelamar'] = $this->Pelamar_model->getPelamarById($id_pelamar);
		$this->load->view('templates/header', $data);
		$this->load->view('pelamar/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id_pelamar)
	{
		$data['judul'] = 'Form Ubah Data Pelamar';
		$data['tb_pelamar'] = $this->Pelamar_model->getPelamarById($id_pelamar);
		$data['jk']=['Laki-laki' , 'Perempuan'];
		$data['pendidikan'] = ['Diploma' , 'Sarjana', 'Magister', 'Doktor'];

		$this->form_validation->set_rules('nama' , 'Nama' , 'required');
		$this->form_validation->set_rules('ktp' , 'KTP' , 'required|numeric');
		$this->form_validation->set_rules('nohp' , 'Nomor HP' , 'required|numeric');
		$this->form_validation->set_rules('email' , 'Email' , 'required|valid_email');
		$this->form_validation->set_rules('alamat' , 'Alamat' , 'required');
		$this->form_validation->set_rules('pendidikan' , 'Pendidikan' , 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('pelamar/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Pelamar_model->ubahDataPelamar();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pelamar');
		}
	}

}