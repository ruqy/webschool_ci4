<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class schoolYearsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'school_year_name'   => '2021',
            'departement_id'     => 1,
            'school_year_desc'   => 'Tahun ajaran 2021/2022',
            'start_date'  => Time::createFromDate(2021, 7, 21),
            'end_date'    => Time::createFromDate(2022, 6, 18),
            'created_at'    => Time::now(),
            'updated_at'    => Time::now(),
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('school_years')->insert($data);
    }
}