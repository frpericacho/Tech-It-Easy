<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $users = [
                [
                    'id' => 1,
                    'email' => 'arroba@gmail.com',            
                    'username' => 'rubentao',  
                ],
                [
                    'id' => 2,
                    'email' => 'arroba2@gmail.com',            
                    'username' => 'krosf',  
                ],
                [
                    'id' => 3,
                    'email' => 'arroba3@gmail.com',            
                    'username' => 'frpericacho',  
                ],
            ];
            $this->db->table('users')->insertBatch($users);
        }
}