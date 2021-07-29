<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type' => 'BIGINT',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'gender' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'induk_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'nisn' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'another_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'kk_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'nik_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'place_of_birth' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'birthday' => [
				'type' => 'DATE',
				'null' => true,
			],
			'religion' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'postal_code' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'phone_number_second' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'father_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'father_nik' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'father_birthday' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'father_profession' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'father_education' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'mother_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'mother_nik' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'mother_birthday' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'mother_profession' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'mother_education' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'parent_salary' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'ijazah_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'participants_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'skhun_number' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'sttb_year' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'origin_school' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'child_number' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'future_goals' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'weight' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'height' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true,
			],
			'blood_group' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true,
			],
			'created_at' => [
				'type' => 'DATETIME',
			],
			'updated_at' => [
				'type' => 'DATETIME',
			]
		]);
		$this->forge->addKey('id');
		$this->forge->createTable('students');
	}

	public function down()
	{
		$this->forge->dropTable('students');
	}
}