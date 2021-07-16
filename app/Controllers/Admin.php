<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'header' => "Halaman Admin",
			'title' => "Admin",
		];
		echo view('admin/blank', $data);
	}
}