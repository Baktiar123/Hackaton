<?php
	
	class Page extends CI_Controller{

		public function index(){

			$readAPI = file_get_contents('https://coronavirus-19-api.herokuapp.com/all');
			$data['indonesia'] = json_decode($readAPI, true);

			// echo "<pre>";
			// print_r($data);

			$this->load->view('index', $data);

		}

		
		// 	print_r($data);
		//  return $data;
		// }
}

?>