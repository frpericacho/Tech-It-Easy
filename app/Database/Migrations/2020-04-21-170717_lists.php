<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lists extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
				'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
				'constraint' => 9,
				'null' => true,
            ],
            'prod_id' => [
                'type' => 'INT',
				'constraint' => 9,
				'null' => true,
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '9,2',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 9,
                'default' => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('prod_id', 'product', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('lists');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('lists');
    }
}
