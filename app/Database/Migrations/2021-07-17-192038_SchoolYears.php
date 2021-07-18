<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SchoolYears extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'departement_id' => [
				'type' => 'INT',
			],
			'desc' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'start_date' => [
				'type' => 'DATE',
			],
			'end_date' => [
				'type' => 'DATE',
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id');
		$this->forge->createTable('school_years');
	}

	public function down()
	{
		$this->forge->dropTable('school_years');
	}
}