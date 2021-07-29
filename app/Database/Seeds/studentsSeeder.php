<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class studentsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'    => 'Fulan bin Fulan',
            'gender'    => 'laki-laki',
            'induk_number'  => '202110003',
            'nisn'  => '202110003',
            'address'  => 'Bandung',
            'created_at'          => Time::now(),
            'updated_at'          => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('students')->insert($data);
    }
}