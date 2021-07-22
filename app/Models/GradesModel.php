<?php

namespace App\Models;

use CodeIgniter\Model;

class GradesModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'grades';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['departement_id', 'desc', 'level_id', 'school_year_id', 'name', 'teacher_id', 'capacity', 'status', 'current_capacity'];

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
			return $this->table('grades')->join('departements', 'departements.departement_id=grades.departement_id', 'left')->join('levels', 'levels.level_id=grades.level_id', 'left')->get()->getResultArray();
		} else {
			return $this->table('grades')->join('departements', 'departements.departement_id=grades.departement_id', 'left')->join('levels', 'levels.level_id=grades.level_id', 'left')->where('grades.id', $id)->get()->getRowArray();
		}
	}
}