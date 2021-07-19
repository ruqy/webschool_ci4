<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
	public function index()
	{
		$name = "MAS P3 SumurBandung";
		$url_title = url_title($name, '-', TRUE);
		echo $url_title;
	}
}