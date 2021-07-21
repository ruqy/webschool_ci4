<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Semesters extends Migration
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
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'desc' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id');
		$this->forge->addForeignKey('departement_id', 'departements', 'id');
		$this->forge->createTable('semesters');
	}

	public function down()
	{
		$this->forge->dropTable('semesters');
	}
}