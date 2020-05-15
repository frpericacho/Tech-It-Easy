<?php namespace App\Database\Seeds;

class ProductSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $reviews = [
                [
                    'user_id' => 1,
                    'prod_id' = 1,
                    'comment' => 'Raton perfecto, me encanta',
                    'rating' => 4,
                ],
                [
                    'user_id' => 2,
                    'prod_id' = 1,
                    'comment' => 'Un raton que no esta nada mal',
                    'rating' => 3,
                ],
                [
                    'user_id' => 3,
                    'prod_id' = 1,
                    'comment' => 'Malisima calidad, no lo compren',
                    'rating' => 1,
                ],
            ];
            $this->db->table('prodreviews')->insertBatch($reviews);
        }
}