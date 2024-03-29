<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'levels';
	protected $primaryKey           = 'level_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['level_name', 'departement_id', 'level_desc'];

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
			return $this->table('levels')->join('departements', 'departements.departement_id=levels.departement_id', 'left')->get()->getResultArray();
		} else {
			return $this->table('levels')->join('departements', 'departements.departement_id=levels.departement_id', 'left')->where('levels.level_id', $id)->get()->getRowArray();
		}
	}
}