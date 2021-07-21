<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Levels extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'level_name' => [
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
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id');
		$this->forge->addForeignKey('departement_id', 'schools', 'id');
		$this->forge->createTable('levels');
	}

	public function down()
	{
		$this->forge->dropTable('levels');
	}
}