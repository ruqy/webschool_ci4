<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartementsModel;
use App\Models\GenerationsModel;
use App\Models\GradesModel;
use App\Models\LevelsModel;
use App\Models\SchoolModel;
use App\Models\SchoolYearsModel;
use App\Models\SemestersModel;

class Academic extends BaseController
{


	public function __construct()
	{
		helper('filesystem');
		$this->header = 'Data Akademik';
		$this->departementsModel = new DepartementsModel();
		$this->generationsModel = new GenerationsModel();
		$this->gradesModel = new GradesModel();
		$this->levelsModel = new LevelsModel();
		$this->schoolYearsModel = new SchoolYearsModel();
		$this->semestersModel = new SemestersModel();
		$this->schoolsModel = new SchoolModel();
	}

	public function index()
	{
		$data['header'] = $this->header;
		$data['section'] = 'Rincian';
		$data['departement'] = $this->departementsModel->findAll();
		$data['grades'] = $this->gradesModel->findAll();
		$data['levels'] = $this->levelsModel->findAll();
		$data['school_years'] = $this->schoolYearsModel->get_data();
		$data['semester'] = $this->semestersModel->findAll();
		$data['schools'] = $this->schoolsModel->findAll();
		return view('academic/index', $data);
	}

	public function create($form)
	{
		switch ($form) {
			case 'school_years':
				$data['form_title'] = "Tahun Pelajaran";
				$data['departement'] = $this->schoolsModel->findAll();
				break;
			case 'semesters':
				$data['form_title'] = "Semester";
				break;
			case 'departements':
				$data['form_title'] = "Divisi";
				break;
			case 'levels':
				$data['form_title'] = "Tingkat";
				break;
			case 'grades':
				$data['form_title'] = "Kelas";
				break;
			case 'generations':
				$data['form_title'] = "Angkatan";
				break;
		}
		$data['header'] = $this->header;
		$data['section'] = 'Tambah Data';
		$data['form'] = $form;
		return view('academic/create', $data);
	}

	public function store()
	{
		$form = $this->request->getPost('form');
		$data['name'] = $this->request->getPost('name');
		$data['desc'] = $this->request->getPost('desc');

		if ($form != 'Divisi') {
			$data['departement_id'] = $this->request->getPost('departement_id');
		}
		switch ($form) {
			case 'Tahun Pelajaran':
				$data['start_date'] = $this->request->getPost('start_date');
				$data['end_date'] = $this->request->getPost('end_date');
				$this->schoolYearsModel->save($data);
				break;
			case 'Semester':
				//simpan data
				$this->semestersModel->save($data);
				break;
			case 'Divisi':
				$data['status'] = $this->request->getPost('status');
				$data['headmaster_id'] = $this->request->getPost('headmaster_id');
				$this->departementsModel->save($data);
				break;
			case 'Tingkat':
				//simpan data
				$this->levels->save($data);
				break;
			case 'Kelas':
				$data['level_id'] = $this->request->getPost('level');
				$data['school_year'] = $this->request->getPost('school_year');
				$data['teacher_id'] = $this->request->getPost('teacher_id');
				$data['capacity'] = $this->request->getPost('capacity');
				$data['current_capacity'] = $this->request->getPost('current_capacity');
				$data['status'] = $this->request->getPost('status');
				$this->gradesModel->save($data);
				break;
			case 'Angkatan':
				$data['status'] = $this->request->getPost('status');
				$this->gerationsModel->save($data);
				break;
		}
		session()->setFlashdata('form', $form);
		session()->setFlashdata('pesan', " ditambah");
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/academic'));
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

		$schoolData = [
			'id' => $this->request->getPost('id'),
			'address' => $this->request->getPost('address'),
			'email' => $this->request->getPost('email'),
			'phone_number' => $this->request->getPost('phone_number'),
			'website' => $this->request->getPost('website'),
			'fax' => $this->request->getPost('fax'),
		];

		if ($lastData['name'] != $this->request->getPost('name')) {
			$schoolData['name'] = $this->request->getPost('name');
		}
		session()->setFlashdata('alert', 'alert-warning');
		session()->setFlashdata('pesan', 'diubah');
		return redirect()->to(base_url('/academic'));
	}

	public function delete($id)
	{
		$form = $this->request->getPost('form');

		switch ($form) {
			case 'Tahun Pelajaran':
				$this->schoolYearsModel->delete($id);
				break;
			case 'Semester':
				$this->semestersModel->delete($id);
				break;
			case 'Divisi':
				$this->departementsModel->delete($id);
				break;
			case 'Tingkat':
				$this->levelsModel->delete($id);
				break;
			case 'Kelas':
				$this->gradesModel->delete($id);
				break;
			case 'Angkatan':
				$this->generationsModel->delete($id);
				break;
		}
		session()->setFlashdata('form', $form);
		session()->setFlashdata('pesan', ' dihapus');
		session()->setFlashdata('alert', 'alert-danger');
		return redirect()->to(base_url('/academic'));
	}
}