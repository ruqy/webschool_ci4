<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class generationsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'    => '2021',
            'desc'    => 'angkatan tahun ajaran 2021-2023',
            'departement_status'  => 1,
            'created_at'          => Time::now(),
            'updated_at'          => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('generations')->insert($data);
    }
}