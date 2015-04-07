<?php
class Pages extends CI_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/'.$page.'.php'))
		{
			show_404();
		}
		$data['page'] = $page;

		$this->load->view('header', $data);
		$this->load->view($page);

		if ($page != 'home') {
			$this->load->view('footer');
		}
	}
}
?>