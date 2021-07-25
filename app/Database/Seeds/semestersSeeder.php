<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class semestersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'    => '1',
            'desc'    => 'Semester 1',
            'departement_id'  => 1,
            'created_at'          => Time::now(),
            'updated_at'          => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('semesters')->insert($data);
    }
}