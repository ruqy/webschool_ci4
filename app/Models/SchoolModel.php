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
		'name' => 'required',
		'logo' => 'mime_in[logo,image/jpg,image/jpeg,image/png]|max_size[logo,512]',
		'address' => 'required',
		'email' => 'required',
	];
	protected $validationMessages   = [
		'name' => [
			'required' => 'Nama sekolah harus diisi',
		],
		'logo' => [
			'mime_in' => 'Ekstensi tidak didukung. File yang didukung adalah .jpg, .jpeg, png',
			'max_size' => 'File tidak boleh lebih dari 512 kb'
		],
		'address' => [
			'required' => 'Alamat sekolah harus diisi',
		],
		'email' => [
			'required' => 'Email sekolah harus diisi',
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