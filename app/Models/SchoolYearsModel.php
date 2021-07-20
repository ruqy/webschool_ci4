<?php

namespace App\Models;

use CodeIgniter\Model;

class SchoolYearsModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'school_years';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'departement_id', 'desc', 'start_date', 'end_date'];

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

	public function get_data()
	{
		$this->join('school_years', 'school_years.departement_id = schools.name', 'LEFT');
		$this->select('school_years*');
		$result = $this->findAll();
		echo $this->db->getLastQuery();

		dd($result);
		// $this->db->join('schools','school_years.departement_id = schools.id' );

	}
}