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
		$this->header = 'Data Akademik';
		$this->departementsModel = new DepartementsModel();
		$this->generationsModel = new GenerationsModel();
		$this->gradesModel = new GradesModel();
		$this->levelsModel = new LevelsModel();
		$this->schoolYearsModel = new SchoolYearsModel();
		$this->semestersModel = new SemestersModel();
		$this->generationsModel = new GenerationsModel();
	}

	public function index()
	{
		$data['header'] = $this->header;
		$data['section'] = 'Rincian';
		$data['departements'] = $this->departementsModel->findAll();
		$data['grades'] = $this->gradesModel->get_data();
		$data['levels'] = $this->levelsModel->get_data();
		$data['school_years'] = $this->schoolYearsModel->get_data();
		$data['semesters'] = $this->semestersModel->get_data();
		$data['generations'] = $this->generationsModel->get_data();
		return view('academic/index', $data);
	}

	public function show($form, $id)
	{
		$data['header'] = $this->header;
		$data['section'] = 'Detail Data';
		$data['form'] = $form;
		switch ($form) {
			case 'Tahun Pelajaran':
				$data['data'] = $this->schoolYearsModel->find($id);
				$view = "school_year";
				break;
			case 'Semester':
				$data['data'] = $this->semestersModel->find($id);
				$view = "semester";
				break;
			case 'Divisi':
				$data['data'] = $this->departementsModel->find($id);
				$view = "departement";
				break;
			case 'Tingkat':
				$data['data'] = $this->levelsModel->find($id);
				$view = "level";
				break;
			case 'Kelas':
				$data['data'] = $this->gradesModel->get_data($id);
				$view = "grade";
				break;
			case 'Angkatan':
				$data['data'] = $this->generationsModel->get_data($id);
				$view = "generation";
				break;
		}
		return view('academic/detail/' . $view, $data);
	}

	public function create($form)
	{
		$data['departement'] = $this->departementsModel->findAll();
		$data['levels'] = $this->levelsModel->findAll();
		$data['school_years'] = $this->schoolYearsModel->findAll();
		$data['header'] = $this->header;
		$data['section'] = 'Tambah Data';
		return view('academic/create/' . $form, $data);
	}

	public function store()
	{
		$form = $this->request->getPost('form');
		if ($form != 'Divisi') {
			$data['departement_id'] = $this->request->getPost('departement_id');
		}
		switch ($form) {
			case 'Tahun Pelajaran':
				$data['school_year_name'] = $this->request->getPost('name');
				$data['school_year_desc'] = $this->request->getPost('desc');
				$data['start_date'] = $this->request->getPost('start_date');
				$data['end_date'] = $this->request->getPost('end_date');
				$this->schoolYearsModel->save($data);
				break;
			case 'Semester':
				$data['name'] = $this->request->getPost('name');
				$data['desc'] = $this->request->getPost('desc');
				$this->semestersModel->save($data);
				break;
			case 'Divisi':
				$data['departement_name'] = $this->request->getPost('name');
				$data['departement_desc'] = $this->request->getPost('desc');
				$data['departement_status'] = $this->request->getPost('status');
				$data['headmaster_id'] = $this->request->getPost('headmaster_id');
				$this->departementsModel->save($data);
				break;
			case 'Tingkat':
				$data['level_name'] = $this->request->getPost('name');
				$data['level_desc'] = $this->request->getPost('desc');
				$data['departement_id'] = $this->request->getPost('departement_id');
				$this->levelsModel->save($data);
			break;
			case 'Kelas':
				$data['name'] = $this->request->getPost('name');
				$data['desc'] = $this->request->getPost('desc');
				$data['level_id'] = $this->request->getPost('level');
				$data['school_year_id'] = $this->request->getPost('school_year');
				$data['teacher_id'] = $this->request->getPost('teacher_id');
				$data['capacity'] = $this->request->getPost('capacity');
				$data['current_capacity'] = $this->request->getPost('current_capacity');
				$data['status'] = $this->request->getPost('status');
				// dd($data);
				$this->gradesModel->save($data);
				break;
			case 'Angkatan':
				$data['name'] = $this->request->getPost('name');
				$data['desc'] = $this->request->getPost('desc');
				$data['status'] = $this->request->getPost('status');
				$this->generationsModel->save($data);
				break;
		}
		session()->setFlashdata('form', $form);
		session()->setFlashdata('pesan', " ditambah");
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/academic'));
	}

	public function edit($form, $id)
	{
		$data['departements'] = $this->departementsModel->findAll();
		$data['levels'] = $this->levelsModel->findAll();
		$data['school_years'] = $this->schoolYearsModel->findAll();

		$data['header'] = $this->header;
		$data['section'] = 'Edit Data';
		$data['form'] = $form;
		switch ($form) {
			case 'school_year':
				$data['form_title'] = 'Tahun Ajaran';
				$data['school_year'] = $this->schoolYearsModel->find($id);
				break;
			case 'departement':
				$data['form_title'] = 'Divisi';
				$data['departement'] = $this->departementsModel->find($id);
				break;
			case 'grade':
				$data['form_title'] = 'Kelas';
				$data['grade'] = $this->gradesModel->find($id);
				break;
			case 'level':
				$data['form_title'] = 'Tingkat';
				$data['level'] = $this->levelsModel->find($id);
				break;
			case 'generation':
				$data['form_title'] = 'Angkatan';
				$data['generation'] = $this->generationsModel->find($id);
				break;
			case 'semester':
				$data['form_title'] = 'Semester';
				$data['semester'] = $this->semestersModel->find($id);
				break;
		}
		// dd($data);
		return view('academic/edit/' . $form, $data);
	}

	public function update()
	{
		$form = $this->request->getPost('form');
		switch ($form) {
			case 'Divisi':
				$data = [
					'departement_id' => $this->request->getPost('id'),
					'departement_name' => $this->request->getPost('name'),
					'departement_desc' => $this->request->getPost('desc'),
					'headmaster_id' => $this->request->getPost('headmaster_id'),
					'departement_status' => $this->request->getPost('status'),
				];
				$this->departementsModel->save($data);
				break;
			case 'Tingkat':
				$data = [
					'level_id' => $this->request->getPost('id'),
					'level_name' => $this->request->getPost('name'),
					'level_desc' => $this->request->getPost('desc'),
					'departement_id' => $this->request->getPost('departement_id'),
				];
				$this->levelsModel->save($data);
				break;
			case 'Tahun Pelajaran':
				$data = [
					'school_year_id' => $this->request->getPost('id'),
					'school_year_name' => $this->request->getPost('name'),
					'school_year_desc' => $this->request->getPost('desc'),
					'departement_id' => $this->request->getPost('departement_id'),
					'start_date' => $this->request->getPost('start_date'),
					'end_date' => $this->request->getPost('end_date'),
				];
				$this->schoolYearsModel->save($data);
				break;
			case 'Semester':
				$data = [
					'id' => $this->request->getPost('id'),
					'name' => $this->request->getPost('name'),
					'desc' => $this->request->getPost('desc'),
					'departement_id' => $this->request->getPost('departement_id'),
				];
				$this->semestersModel->save($data);
				break;
			case 'Kelas':
				$data = [
					'id' => $this->request->getPost('id'),
					'name' => $this->request->getPost('name'),
					'desc' => $this->request->getPost('desc'),
					'departement_id' => $this->request->getPost('departement_id'),
					'level_id' => $this->request->getPost('level_id'),
					'teacher_id' => $this->request->getPost('teacher_id'),
					'capacity' => $this->request->getPost('capacity'),
					'current_capacity' => $this->request->getPost('current_capacity'),
					'status' => $this->request->getPost('status'),
				];
				$this->gradesModel->save($data);
				break;
			case 'Angkatan':
				$data = [
					'id' => $this->request->getPost('id'),
					'name' => $this->request->getPost('name'),
					'desc' => $this->request->getPost('desc'),
					'departement_id' => $this->request->getPost('departement_id'),
					'status' => $this->request->getPost('status'),
				];
				$this->generationsModel->save($data);
				break;
		}
		session()->setFlashdata('form', $form);
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