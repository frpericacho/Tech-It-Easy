<?php namespace App\Database\Seeds;

class ProductSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $products = [
                [
                    'name' => 'Raton', 
                    'department' => 1, 
                    'description' => 'Raton Razer perfecto para gamming', 
                    'image' => 'images/razer.jpg', 
                    'price' => 50.0,
                ],
                [
                    'name' => 'Mac', 
                    'department' => 2, 
                    'description' => 'Mac imperfecto para gamming', 
                    'image' => 'images/mac.jpg', 
                    'price' => 5000.0,
                ],
                [
                    'name' => 'PC Atom', 
                    'department' => 2, 
                    'description' => 'PC de sobremesa pensado para la ofimatica', 
                    'image' => 'images/pc.jpg', 
                    'price' => 500.0,
                ],
                [
                    'name' => 'Altavoces', 
                    'department' => 3, 
                    'description' => 'Altavoces ideales para sonido', 
                    'image' => 'images/altavoces.jpg', 
                    'price' => 35.0,
                ],
                [
                    'name' => 'Auriculares', 
                    'department' => 3, 
                    'description' => 'Auriculares perfectos para gamming', 
                    'image' => 'images/headset.jpg', 
                    'price' => 73.0,
                ],
                [
                    'name' => 'Monitor', 
                    'department' => 2, 
                    'description' => 'Monitor perfecto para ver', 
                    'image' => 'images/monitor.jpeg', 
                    'price' => 180.0,
                ],
                [
                    'name' => 'Microfono', 
                    'department' => 2, 
                    'description' => 'Microfono perfecto para hablar', 
                    'image' => 'images/microphone.jpg', 
                    'price' => 20.0,
                ],
                [
                    'name' => 'Teclado', 
                    'department' => 2, 
                    'description' => 'Teclado perfecto para escribir', 
                    'image' => 'images/keyboard.png', 
                    'price' => 110.0,
                ],
                [
                    'name' => 'Auriculares', 
                    'department' => 3, 
                    'description' => 'Auriculares perfectos para oir', 
                    'image' => 'images/headset2.jpg', 
                    'price' => 84.0,
                ],
            ];
            $this->db->table('product')->insertBatch($products);
        }
}