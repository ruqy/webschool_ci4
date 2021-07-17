<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SchoolModel;

class SchoolController extends BaseController
{


	public function __construct()
	{
		helper('filesystem');
		$this->schools = new SchoolModel();
		$this->title = 'Admin Sekolah';
		$this->header = 'Sekolah';
	}
	public function index()
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;
		$data['school'] = $this->schools->findAll();
		return view('school/index', $data);
	}

	public function show($id)
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;
		$data['school'] = $this->schools->find($id);
		return view('school/detail', $data);
	}

	public function create()
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;
		return view('school/create', $data);
	}

	public function store()
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;

		$file = $this->request->getFile('logo');

		if ($file->isValid()) {
			$path = 'assets/img/logo/' . $file->getName();
			$fileName = $file->getName();
		} else {
			$path = '';
		}

		$schoolData = [
			'name' => $this->request->getPost('name'),
			'address' => $this->request->getPost('address'),
			'email' => $this->request->getPost('email'),
			'phone_number' => $this->request->getPost('phone_number'),
			'website' => $this->request->getPost('website'),
			'fax' => $this->request->getPost('fax'),
			'logo' => $path,
		];
		if ($this->schools->save($schoolData) === false) {
			$error = $this->schools->errors();
			return redirect()->back()->withInput()->with('errors', $error);
		}
		if ($path != '') {
			$file->move('assets/img/logo/', $fileName);
		}
		session()->setFlashdata('pesan', 'ditambah');
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/school'));
	}

	public function edit($id)
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;
		$data['school'] = $this->schools->find($id);
		return view('school/edit', $data);
	}

	public function update()
	{
		$data['title'] = $this->title;
		$data['header'] = $this->header;

		$lastData = $this->schools->find($this->request->getPost('id'));
		$lastLogo = $lastData['logo'];
		$file = $this->request->getFile('logo');
		if ($file->isValid()) {
			$path = 'assets/img/logo/' . $file->getName();
			$fileName = $file->getName();
		} else {
			$path = '';
		}

		$schoolData = [
			'id' => $this->request->getPost('id'),
			'name' => $this->request->getPost('name'),
			'address' => $this->request->getPost('address'),
			'email' => $this->request->getPost('email'),
			'phone_number' => $this->request->getPost('phone_number'),
			'website' => $this->request->getPost('website'),
			'fax' => $this->request->getPost('fax'),
			'logo' => $path,
		];
		if ($this->schools->save($schoolData) === false) {
			$error = $this->schools->errors();
			return redirect()->back()->withInput()->with('errors', $error);
		}

		if ($lastLogo != $path || $path != '') {
			delete_files($lastLogo);
		}
		$file->move('assets/img/logo/', $fileName);
		session()->setFlashdata('pesan', 'diubah');
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/school'));
	}

	public function delete($id)
	{
		$this->schools->delete($id);
		session()->setFlashdata('pesan', 'dihapus');
		session()->setFlashdata('alert', 'alert-danger');
		return redirect()->to(base_url('/school'));
	}
}