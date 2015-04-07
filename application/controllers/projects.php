<?php
class Projects extends CI_Controller {

	// public function index()
	// {
	// 	$data['page'] = 'Projects';

	// 	$this->load->view('header', $data);
	// 	$this->load->view('projects_all');
	// 	$this->load->view('footer');
	// }

	public function project_lookup($p_id)
	{

		$data['page'] = 'Projects';
		$data['p_id'] = $p_id;

		$this->load->view('header', $data);
		$this->load->view('project_content');
		$this->load->view('footer');
	}
}
?>