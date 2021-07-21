<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Generations extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'desc' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'status' => [
				'type' => 'TINYINT',
				'constraint' => 1,
			],
			'departement_id' => [
				'type' => 'BIGINT',
				'constraint' => 20,
				'unsigned' => true,

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
		$this->forge->createTable('generations');
	}

	public function down()
	{
		$this->forge->dropTable('generations');
	}
}