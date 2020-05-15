<?php namespace App\Database\Seeds;

class RatingsSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $ratings = [
                [
                    'rating' => 4,
                    'text' => 'arroba@gmail.com',  
                ],
                [
                    'rating' => 2,
                    'text' => 'arroba@gmail.com',  
                ],
                [
                    'rating' => 1,
                    'text' => 'arroba@gmail.com',  
                ],
            ];
            $this->db->table('ratings')->insertBatch($ratings);
        }
}