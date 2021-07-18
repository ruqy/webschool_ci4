<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartementsModel;
use App\Models\GenerationsModel;
use App\Models\GradesModel;
use App\Models\LevelsModel;
use App\Models\SchoolYearsModel;
use App\Models\SemestersModel;

class SchoolController extends BaseController
{


	public function __construct()
	{
		helper('filesystem');
		$this->header = 'Data Akademik';
		$this->departementModel = new DepartementsModel();
		$this->generationsModel = new GenerationsModel();
		$this->gradesModel = new GradesModel();
		$this->levelsModel = new LevelsModel();
		$this->schoolYearsModel = new SchoolYearsModel();
		$this->semestersModel = new SemestersModel();
	}

	public function index()
	{
		$data['header'] = $this->header;
		$data['section'] = 'Rincian';

		return view('school/index', $data);
	}

	public function create()
	{
		$data['header'] = $this->header;
		$data['section'] = 'Tambah Data';
		return view('school/create', $data);
	}

	public function store()
	{
		$file = $this->request->getFile('logo');

		if ($file->isValid()) {
			$fileName = $file->getRandomName();
			$pathLogo = '/assets/img/logo/' . $fileName;
		} else {
			$pathLogo = '/assets/img/logo/default.jpg';
		}

		$schoolData = [
			'name' => $this->request->getPost('name'),
			'address' => $this->request->getPost('address'),
			'email' => $this->request->getPost('email'),
			'phone_number' => $this->request->getPost('phone_number'),
			'website' => $this->request->getPost('website'),
			'fax' => $this->request->getPost('fax'),
			'logo' => $pathLogo,
		];

		if ($this->schools->save($schoolData) === false) {
			$error = $this->schools->errors();
			return redirect()->back()->withInput()->with('errors', $error);
		}

		if ($file->isValid()) {
			$file->move('assets/img/logo/', $fileName);
		}

		session()->setFlashdata('pesan', 'ditambah');
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/school'));
	}

	public function edit($id)
	{
		$data['header'] = $this->header;
		$data['section'] = 'Edit Data';
		$data['school'] = $this->schools->find($id);
		return view('school/edit', $data);
	}

	public function update()
	{
		$lastData = $this->schools->find($this->request->getPost('id'));

		//handler file logo untuk menghapus logo lama jika user update logo baru
		$file = $this->request->getFile('logo');
		if ($file->isValid()) {
			$fileName = $file->getRandomName();
			$pathLogo = '/assets/img/logo/' . $fileName;

			//cek apakah logo berubah
			if ($lastData['logo'] != $pathLogo) {
				$pathDelete = '.' . $lastData['logo'];

				//cek apakah logonya bukan default
				if ($lastData['logo'] != '/assets/img/logo/default.jpg') {
					//hapus logo lama
					unlink($pathDelete);
				}
			}
		} else {
			//jika logo tidak berubah gunakan data yang lama
			$pathLogo = $lastData['logo'];
		}

		$schoolData = [
			'id' => $this->request->getPost('id'),
			'address' => $this->request->getPost('address'),
			'email' => $this->request->getPost('email'),
			'phone_number' => $this->request->getPost('phone_number'),
			'website' => $this->request->getPost('website'),
			'fax' => $this->request->getPost('fax'),
			'logo' => $pathLogo,
		];

		if ($lastData['name'] != $this->request->getPost('name')) {
			$schoolData['name'] = $this->request->getPost('name');
		}

		if ($this->schools->save($schoolData) === false) {
			$error = $this->schools->errors();
			return redirect()->back()->withInput()->with('errors', $error);
		}

		if ($file->isValid()) {
			$file->move('assets/img/logo/', $fileName);
		}

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