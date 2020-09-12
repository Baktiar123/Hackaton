<?php
	
	class Page extends CI_Controller{

		public function index(){

			$data['datalaporan'] = $this->m_hackaton->tampil_data()->
			result();

			$readAPI = file_get_contents('https://coronavirus-19-api.herokuapp.com/all');
			$data['indonesia'] = json_decode($readAPI, true);

			// echo "<pre>";
			// print_r($data);

			$this->load->view('index', $data);
		}

		public function tambah_aksi()
		{
			$nama		= $this->input->post('nama');
			$email		= $this->input->post('email');
			$alamat		= $this->input->post('alamat');	
			$pernyataan	= $this->input->post('pernyataan');

			$data = [
				'nama'		=> $nama,
				'email' 	=> $email,
				'alamat'	=> $alamat,
				'pernyataan'=> $pernyataan
			];

			$this->m_hackaton->input_data($data, 'datalaporan');
			redirect('Page/index');
		}

		
		// 	print_r($data);
		//  return $data;
		// }
}

?>