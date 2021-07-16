<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SchoolController extends BaseController
{
	public function index()
	{
		$data['title'] = 'Admin Template';
		$data['header'] = 'Sekolah';
		echo view('school/index', $data);
	}

	public function show($id)
	{
	}

	public function create()
	{
	}

	public function store()
	{
	}

	public function edit($id)
	{
	}

	public function update($id)
	{
	}

	public function delete($id)
	{
	}
}