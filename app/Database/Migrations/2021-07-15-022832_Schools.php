<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Schools extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 18,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'logo' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'website' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'fax' => [
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
		$this->forge->addKey('id', true);
		$this->forge->createTable('schools');
	}

	public function down()
	{
		$this->forge->dropTable('schools');
	}
}