<?php namespace App\Database\Seeds;

class DepartmentSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $deparments = [
                [
                    'name' => 'Software', 
                ],
                [
                    'name' => 'Computer', 
                ],
                [
                    'name' => 'Audio', 
                ],
            ];
            $this->db->table('department')->insertBatch($deparments);
        }
}