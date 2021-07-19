<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departements extends Migration
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
			'headmaster_id' => [
				'type' => 'INT',
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			],
		]);
		$this->forge->addKey('id');
		$this->forge->createTable('departements');
	}

	public function down()
	{
		$this->forge->dropTable('departements');
	}
}