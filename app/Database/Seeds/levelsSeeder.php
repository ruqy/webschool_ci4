<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class levelsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'level_name'    => '10',
            'level_desc'    => 'kelas 1o',
            'departement_id'  => 1,
            'created_at'          => Time::now(),
            'updated_at'          => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('levels')->insert($data);
    }
}