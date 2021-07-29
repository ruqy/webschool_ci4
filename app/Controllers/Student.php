<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class Student extends BaseController
{
	public function __construct()
	{
		$this->studentsModel = new StudentsModel();
	}
	public function index()
	{
		$data['header'] = 'Siswa';
		$data['section'] = 'Daftar Siswa';
		$data['students'] = $this->studentsModel->findAll();
		return view('student/index', $data);
	}

	public function new()
	{
		$data['header'] = 'Siswa';
		$data['section'] = 'Tambah Siswa Baru';
		return view('student/create', $data);
	}

	public function create()
	{
		$last_no_induk = $this->studentsModel->findAll();

		$data = [
			'name' => $this->request->getPost('name'),
			'gender' => $this->request->getPost('gender'),
			'induk_number' => $this->request->getPost('induk_number'),
			'nisn' => $this->request->getPost('nisn'),
			'another_number' => $this->request->getPost('another_number'),
			'kk_number' => $this->request->getPost('kk_number'),
			'nik_number' => $this->request->getPost('nik_number'),
			'place_of_birth' => $this->request->getPost('place_of_birth'),
			'birthday' => $this->request->getPost('birthday'),
			'religion' => $this->request->getPost('religion'),
			'address' => $this->request->getPost('address'),
			'postal_code' => $this->request->getPost('postal_code'),
			'phone_number' => $this->request->getPost('phone_number'),
			'phone_number_second' => $this->request->getPost('phone_number_second'),
			'father_name' => $this->request->getPost('father_name'),
			'father_nik' => $this->request->getPost('father_nik'),
			'father_birthday' => $this->request->getPost('father_birthday'),
			'father_profession' => $this->request->getPost('father_profession'),
			'father_education' => $this->request->getPost('father_education'),
			'father_name' => $this->request->getPost('father_name'),
			'mother_name' => $this->request->getPost('mother_name'),
			'mother_nik' => $this->request->getPost('mother_nik'),
			'mother_birthday' => $this->request->getPost('mother_birthday'),
			'mother_profession' => $this->request->getPost('mother_profession'),
			'mother_education' => $this->request->getPost('mother_education'),
			'parent_salary' => $this->request->getPost('parent_salary'),
			'ijazah_number' => $this->request->getPost('ijazah_number'),
			'participants_number' => $this->request->getPost('participants_number'),
			'skhun_number' => $this->request->getPost('skhun_number'),
			'sttb_year' => $this->request->getPost('sttb_year'),
			'origin_school' => $this->request->getPost('origin_school'),
			'child_number' => $this->request->getPost('child_number'),
			'future_goals' => $this->request->getPost('future_goals'),
			'weight' => $this->request->getPost('weight'),
			'height' => $this->request->getPost('height'),
			'blood_group' => $this->request->getPost('blood_group'),
		];
		// dd($data);
		if ($this->studentsModel->save($data) === false) {
			$errors = $this->studentsModel->errors();
			return redirect()->back()->withInput()->with('errors', $errors);
		}
		session()->setFlashdata('pesan', 'ditambah');
		session()->setFlashdata('alert', 'alert-success');
		return redirect()->to(base_url('/student'));
	}

	public function show($id)
	{
		$data['header'] = 'Siswa';
		$data['section'] = 'Rincian Data Siswa';
		return view('student/detail', $data);
	}

	public function edit($id)
	{
		echo 'Edit data siswa <br>';
		echo 'Ujicoba membuat nomor induk <br>';
		$tahun = '2122';
		$kode_sekolah = '100';
		$kode_siswa = 1;
		for ($i = 0; $i < 100; $i++) {
			if ($kode_siswa < 10)
				echo $tahun . $kode_sekolah . '00' . $kode_siswa;
			else if ($kode_siswa < 100)
				echo $tahun . $kode_sekolah . '0' . $kode_siswa;
			else
				echo $tahun . $kode_sekolah . $kode_siswa;
			echo '<br>';
			$kode_siswa++;
		}
		// return view('student/edit');
	}

	public function update($id)
	{
		echo 'update data siswa';
	}

	public function remove($id)
	{
	}

	public function delete($id)
	{
		echo 'delete data siswa';
	}
}