<?php

namespace App\Models;

use CodeIgniter\Model;

class SemestersModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'semesters';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['departement_id', 'desc', 'name'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
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

	public function get_data($id = NULL)
	{
		if ($id === NULL) {
			return $this->table('semesters')->join('departements', 'departements.departement_id=semesters.departement_id', 'left')->get()->getResultArray();
		} else {
			return $this->table('semesters')->join('departements', 'departements.departement_id=semesters.departement_id', 'left')->where('semesters.id', $id)->get()->getRowArray();
		}
	}
}