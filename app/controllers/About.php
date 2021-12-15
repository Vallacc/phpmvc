<?php  

class About extends Controller
{
	public function index()
	{
		$data['judul'] = 'About';
		$this->view('templates/header', $data);
		$this->view('About/index');
		$this->view('templates/footer');
	}
}