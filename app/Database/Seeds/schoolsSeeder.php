<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class schoolsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'school_name'   => 'MA Sumur Bandung',
            'logo'          => 'default.jpg',
            'address'       => 'Jl Raya Cililin No.52 Kec. Cililin Kab. Bandung Barat',
            'phone_number'  => '08971276858',
            'email'         => 'map3sb@gmail.com',
            'website'       => 'ma.p3sb.ponpes.id',
            'fax'           => '222-123-555',
            'created_at'    => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('schools')->insert($data);
    }
}