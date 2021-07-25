<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class departementsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'departement_name'    => 'SMA',
            'departement_desc'    => 'Sekolah Menengah Atas',
            'departement_status'  => 1,
            'headmaster_id'       => 1,
            'created_at'          => Time::now(),
            'updated_at'          => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('departements')->insert($data);
    }
}