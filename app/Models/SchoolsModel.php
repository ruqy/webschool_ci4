<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'schools';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'logo', 'address', 'phone_number', 'email', 'website', 'fax'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'name' => 'required',
		'address' => 'required',
		'email' => 'required|valid_email',
		'logo' => 'mime_in[logo,image/jpg,image/jpeg,image/png]|max_size[logo,512]'

	];
	protected $validationMessages   = [
		'name' => [
			'required' => 'Nama sekolah haru diisi.'
		],
		'address' => [
			'required' => 'Alamat sekolah harus diisi.'
		],
		'email' => [
			'required' => 'Email harus diisi.',
			'valid_email' => 'Email tidak valid, coba cek kembali.',
			// 'is_unique' => 'Email sudah digunakan. Mohon menggunakan email yang lain.'
		],
		'logo' => [
			'mime_in' => 'Format file tidak sesuai. File diizinkan *jpg, jpeg, png.',
			'max_size' => 'Ukuran file terlalu besar. Maksimal file logo berukuran 512 kb.',
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