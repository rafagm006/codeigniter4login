<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/admin_header', $data);
		echo view('dashboard');
		echo view('templates/admin_footer');
	}

	//--------------------------------------------------------------------

}
