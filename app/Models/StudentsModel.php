<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'students';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'name', 'gender', 'induk_number', 'nisn', 'another_number',
		'kk_number', 'nik_number', 'place_of_birth', 'birthday', 'religion', 'address', 'postal_code', 'phone_number',
		'phone_number_second', 'father_name', 'father_nik', 'father_birthday', 'father_profession',
		'father_education', 'father_name', 'mother_name', 'mother_nik', 'mother_birthday', 'mother_profession',
		'mother_education', 'parent_salary', 'ijazah_number', 'participants_number', 'skhun_number',
		'sttb_year', 'origin_school', 'child_number', 'future_goals', 'weight', 'height', 'blood_group'
	];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'name' => 'required',
	];
	protected $validationMessages   = [
		'name' => [
			'required' => 'Nama harus diisi',
		],
	];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}