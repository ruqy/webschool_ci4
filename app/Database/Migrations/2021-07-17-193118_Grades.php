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
				'constraint' => 20,
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
			'school_year' => [
				'type' => 'INT',
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
		$this->forge->createTable('grades');
	}

	public function down()
	{
		$this->forge->dropTable('grades');
	}
}