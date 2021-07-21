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
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true,
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
		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('departement_id', 'departements', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('school_years');
	}

	public function down()
	{
		$this->forge->dropTable('school_years');
	}
}