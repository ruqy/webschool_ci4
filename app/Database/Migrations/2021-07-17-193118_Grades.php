<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Grades extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'departement_id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
			],
			'desc' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'level_id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
			],
			'school_year_id' => [
				'type' 		=> 'INT',
				'unsigned'	=> true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'teacher_id' => [
				'type' => 'INT',
			],
			'capacity' => [
				'type' => 'INT',
			],
			'current_capacity' => [
				'type' => 'INT',
			],
			'status' => [
				'type' => 'TINYINT',
				'constraint' => 1,
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id');
		$this->forge->addForeignKey('departement_id', 'departements', 'departement_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('level_id', 'levels', 'departement_id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('school_year_id', 'school_years', 'school_year_id', 'CASCADE', 'CASCADE');
		// $this->forge->addForeignKey('headmaster_id', 'teacher', 'id');
		$this->forge->createTable('grades');
	}

	public function down()
	{
		$this->forge->dropTable('grades');
	}
}