<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sellerreviews extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'seller_id' => [
                'type' => 'INT',
                'constraint' => 9,
            ],
            'comment' => [
                'type' => 'TEXT',
            ],
            'rating' => [
                'type' => 'INT',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('seller_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('rating', 'ratings', 'rating', 'CASCADE', 'NOT ACTION');
        $this->forge->createTable('prodreviews');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('prodreviews');
    }
}
