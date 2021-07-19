<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Admin Sekolah',
			'header' => 'Dashboard',
			'section' => 'Guru',
		];
		return view('admin/dashboard', $data);
	}
}