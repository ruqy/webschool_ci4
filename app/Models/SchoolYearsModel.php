<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolYearsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'school_years';
	protected $primaryKey           = 'school_year_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['school_year_name', 'departement_id', 'school_year_desc', 'start_date', 'end_date'];

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
			return $this->table('school_years')->join('departements', 'departements.departement_id=school_years.departement_id', 'left')->get()->getResultArray();
		} else {
			return $this->table('school_years')->join('departements', 'departements.departement_id=school_years.departement_id', 'left')->where('school_years.school_year_id', $id)->get()->getRowArray();
		}
	}
}