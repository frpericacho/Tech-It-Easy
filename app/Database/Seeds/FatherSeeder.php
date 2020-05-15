<?php namespace App\Database\Seeds;

class FatherSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $this->call('DepartmentSeeder');
            $this->call('ProductSeeder');
        }
}