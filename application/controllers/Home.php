<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		// $this->load->view('home');

		if(!isset($_SESSION['user_id'])) {
			$this->load->view('user/login');
        } else {


		$offset = 0;

		$this->load->model('flashcards');

		$arr = $this->flashcards->flashWithCateOffset(intval($offset),$_SESSION['user_id']);
        $countAll = $this->flashcards->countAll($_SESSION['user_id']);
        [$data] = $arr;
		
        $data["offset"] = $offset;
        $data["count"] = $countAll;

        $this->load->view('flashcard/displayOneCard',$data);
		};
		
		$this->load->view('templates/footer');
	}
}
