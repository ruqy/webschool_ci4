<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'schools';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'address', 'logo', 'phone_number', 'email', 'website', 'fax'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
		'name' => 'required|is_unique[schools.name]',
		'logo' => 'mime_in[logo,image/jpg,image/jpeg,image/png]|max_size[logo,512]',
		'address' => 'required',
		'email' => 'required|valid_email',
	];
	protected $validationMessages   = [
		'name' => [
			'required' => 'Nama sekolah harus diisi.',
			'is_unique' => 'Nama sekolah sudah terdaftar.'
		],
		'logo' => [
			'mime_in' => 'Ekstensi tidak didukung. File yang didukung adalah .jpg, .jpeg, dan .png.',
			'max_size' => 'File tidak boleh lebih dari 512 kb.'
		],
		'address' => [
			'required' => 'Alamat sekolah harus diisi.',
		],
		'email' => [
			'required' => 'Email sekolah harus diisi.',
			'valid_email' => 'Format email salah, mohon diperiksa kembali.'
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