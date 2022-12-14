<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

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
		$data['user_list'] = $this->User->getUsers();
		$this->load->view('user', $data);
	}

	public function addUser()
	{
		$this->load->view('add_user');
	}

	public function createUser()
	{
		$this->User->insertUser([
			'username'  => $_POST['username'],
			'email'     => $_POST['email'],
			'password'  => $_POST['password']
		]);
	}
}