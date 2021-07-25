<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class gradesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'departement_id'   => 1,
            'desc'     => 'Kelas 10 A',
            'level_id'   => 1,
            'school_year_id'  => 1,
            'name'    => '10 A',
            'teacher_id'    => 1,
            'capacity'    => 30,
            'current_capacity'    => 20,
            'status'          => 1,
            'created_at'       =>  Time::now(),
            'updated_at'       =>  Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('grades')->insert($data);
    }
}