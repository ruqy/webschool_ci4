<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function index()
	{
		echo "Halaman Utama";
	}

	public function about()
	{
		echo "Halaman About";
	}
}