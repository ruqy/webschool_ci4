<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Curriculum extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Admin Sekolah',
			'header' => 'Kurikulum',
			'section' => 'Data Kurikulum',
		];

		return view('curriculum/index', $data);
	}
}