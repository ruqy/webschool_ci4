<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SchoolsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Schools extends BaseController
{
	public function __construct()
	{
		$this->school = new SchoolsModel();
	}

	public function index()
	{
		// $data['school'] = $this->school->getSchool();
		// echo view('school/index', $data);
		$data = [
			'title' => 'Data Sekolah',
			'header' => 'DAFTAR SEKOLAH',
			'school' => $this->school->findAll(),
		];

		echo view('school/index', $data);
	}

	public function show($id)
	{
		$data['title'] = "Data Sekolah";
		$data['header'] = "DETAIL SEKOLAH";
		$data['school'] = $this->school->where('id', $id)->first();
		if (!$data['school']) {
			throw PageNotFoundException::forPageNotFound();
		}

		echo view('school/detail', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Data Sekolah',
			'header' => 'INPUT DATA SEKOLAH'
		];
		echo view('school/create', $data);
	}

	public function store()
	{
		$file = $this->request->getFile('logo');
		$fileName = $file->getName();
		$path = '/assets/img/logo/' . $fileName;
		$school = [
			"name" => $this->request->getPost("name"),
			"address" => $this->request->getPost("alamat"),
			"phone_number" => $this->request->getPost("phone_number"),
			"email" => $this->request->getPost("email"),
			"website" => $this->request->getPost("website"),
			"fax" => $this->request->getPost("fax"),
			"logo" => $path,
		];
		if ($this->school->insert($school) === false) {
			$errors = $this->school->errors();
			dd($errors);
			return redirect()->to(base_url('/school/new'));
		}
		$file->move(ROOTPATH . 'public/assets/img/logo', $fileName);
		return redirect()->to(base_url('/school'));
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data Sekolah',
			'header' => 'EDIT DATA',
			'school' => $this->school->find($id),
		];
		echo view('school/edit', $data);
	}

	public function update($id)
	{
		$school = [
			"name" => $this->request->getPost("name"),
			"address" => $this->request->getPost("alamat"),
			"phone_number" => $this->request->getPost("phone_number"),
			"email" => $this->request->getPost("email"),
			"website" => $this->request->getPost("website"),
			"fax" => $this->request->getPost("fax"),
		];
		if ($this->school->update($id, $school) === false) {
			$errors = $this->school->errors();
			var_dump($errors);
			dd($school);
			return redirect()->to(base_url('/school/edit/' . $id));
		}
		return redirect()->to(base_url('/school'));
	}

	public function delete($id)
	{
		$this->school->where('id', $id)->delete();
		return redirect()->to(base_url('/school'));
	}
}