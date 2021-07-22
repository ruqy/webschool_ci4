<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Levels extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'level_id' => [
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
				'unsigned' => true,

			],
			'level_desc' => [
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
		$this->forge->addKey('level_id');
		$this->forge->addForeignKey('departement_id', 'departements', 'departement_id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('levels');
	}

	public function down()
	{
		$this->forge->dropTable('levels');
	}
}