<?php
	class Page extends CI_Controller{

		public function index(){

			$data['datalaporan'] = $this->m_hackaton->tampil_data()->
			result();

			$data['jumlah'] = $this->getData();

			$this->load->view('index', $data);
		}

		public function getData(){
	        $ch = curl_init();
	        curl_setopt($ch, CURLOPT_URL, "https://dekontaminasi.com/api/id/covid19/stats");
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        $output = curl_exec($ch);
	        curl_close($ch);
	        // echo $output;
	        $jumlah = json_decode($output);
	        return $jumlah;
	    }

		public function tambah_aksi(){

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